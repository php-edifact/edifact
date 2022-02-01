<?php

declare(strict_types=1);

namespace EDI;

/**
 * EDIFACT Messages Parser
 * (c)2016 Uldis Nelsons
 */
class Analyser
{
    /**
     * @var array<mixed>
     */
    public $segments;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var array<mixed>
     */
    private $jsonedi;
    /**
     * @var array
     */
    private $codes;

    /**
     * @param string $message_xml_file
     *
     * @return array|false
     */
    public function loadMessageXml(string $message_xml_file)
    {
        $messageXmlString = \file_get_contents($message_xml_file);
        if ($messageXmlString === false) {
            return false;
        }

        $messageXml = new \SimpleXMLIterator($messageXmlString);

        return [
            'defaults' => $this->readMessageDefaults($messageXml),
            'segments' => $this->readXmlNodes($messageXml),
        ];
    }

    /**
     * get all data element codes
     *
     * @param string $codesXml
     *
     * @return array|false
     */
    public function loadCodesXml(string $codesXml)
    {
        $codesXmlString = \file_get_contents($codesXml);
        if ($codesXmlString === false) {
            return false;
        }

        $codesXml = new \SimpleXMLIterator($codesXmlString);
        $this->codes = [];
        foreach ($codesXml as $codeCollection) {
            \assert($codeCollection instanceof \SimpleXMLIterator);

            $codeCollectionAttributes = $codeCollection->attributes();
            if ($codeCollectionAttributes === null) {
                continue;
            }

            $id = (string) $codeCollectionAttributes->id;
            $this->codes[$id] = [];
            foreach ($codeCollection as $codeNode) {
                \assert($codeNode instanceof \SimpleXMLIterator);

                $codeAttributes = $codeNode->attributes();
                if ($codeAttributes !== null) {
                    $code = (string) $codeAttributes->id;
                    $this->codes[$id][$code] = (string) $codeAttributes->desc;
                }
            }
        }

        return $this->codes;
    }

    /**
     * convert segment definition from XML to array. Sequence of data_elements and
     * composite_data_element same as in XML
     *
     * @param string $segmentXmlFile
     * @param bool $discardOldSegments
     *
     * @return array|false
     */
    public function loadSegmentsXml(string $segmentXmlFile, bool $discardOldSegments = true)
    {
        if ($discardOldSegments) {
            $this->segments = [];
        }

        $segmentsXml = \file_get_contents($segmentXmlFile);
        if ($segmentsXml === false) {
            return false;
        }

        $xml = \simplexml_load_string($segmentsXml);
        if ($xml === false) {
            return false;
        }
        // free memory
        unset($segmentsXml);

        foreach ($xml as $segmentNode) {
            \assert($segmentNode instanceof \SimpleXMLElement);

            $segmentNodeAttributes = $segmentNode->attributes();
            if ($segmentNodeAttributes === null) {
                continue;
            }

            $qualifier = (string) $segmentNodeAttributes->id;
            $segment = [];
            $segment['attributes'] = $this->readAttributesArray($segmentNode);
            $details = $this->readXmlNodes($segmentNode);
            if (!empty($details)) {
                $segment['details'] = $details;
            }
            $this->segments[$qualifier] = $segment;
        }

        return $this->segments;
    }

    /**
     * Load segment definitions from multiple files
     *
     * @see Analyser::loadSegmentsXml()
     * @param string[] $segmentXmlFiles
     * @return array|false
     */
    public function loadMultiSegmentsXml(array $segmentXmlFiles)
    {
        foreach ($segmentXmlFiles as $xmlFile) {
            if (!$result = $this->loadSegmentsXml($xmlFile, false)) {
                return $result;
            }
        }

        return $this->segments;
    }

    /**
     * create readable EDI MESSAGE with comments
     *
     * @param array      $data        by EDI\Parser:parse() created array from plain EDI message
     * @param array|null $rawSegments (optional) List of raw segments from EDI\Parser::getRawSegments
     *
     * @return string file
     */
    public function process(array $data, array $rawSegments = null): string
    {
        $r = [];
        foreach ($data as $nrow => $segment) {
            $id = $segment[0];

            $r[] = '';
            $jsonsegment = [];
            if (isset($rawSegments[$nrow])) {
                $r[] = \trim($rawSegments[$nrow]);
            }

            if (isset($this->segments[$id])) {
                $attributes = $this->segments[$id]['attributes'];
                $details_desc = $this->segments[$id]['details'];

                $idHeader = $id . ' - ' . $attributes['name'];
                if($this->directory && $id !== 'UNB') {
                    $idHeader .= ' https://service.unece.org/trade/untdid/' . strtolower($this->directory) . '/trsd/trsd' . strtolower($id) . '.htm';
                }
                $r[] = $idHeader;
                $r[] = '  (' . \wordwrap($attributes['desc'], 75, \PHP_EOL . '  ') . ')';

                $jsonelements = ['segmentCode' => $id];
                foreach ($segment as $idx => $detail) {
                    $n = $idx - 1;
                    if ($idx == 0 || !isset($details_desc[$n])) {
                        continue;
                    }
                    $d_desc_attr = $details_desc[$n]['attributes'];
                    $l1 = '      ' . $d_desc_attr['id'] . ' - ' . $d_desc_attr['name'];
                    $l2 = '      ' . \wordwrap($d_desc_attr['desc'], 71, \PHP_EOL . '      ');

                    if (\is_array($detail)) {
                        $r[] = '  [' . $n . '] ' . \implode(',', $detail);
                        $r[] = $l1;
                        $r[] = $l2;

                        $jsoncomposite = [];
                        if (isset($details_desc[$n]['details'])) {
                            $sub_details_desc = $details_desc[$n]['details'];

                            foreach ($detail as $d_n => $d_detail) {
                                $d_sub_desc_attr = $sub_details_desc[$d_n]['attributes'];
                                $codeElementId = $d_sub_desc_attr['id'];
                                $line = '    [' . $d_n . '] ' . $d_detail;
                                if(isset($this->codes[(int)$codeElementId][$d_detail])){
                                    $line .= ' - ' . \wordwrap($this->codes[$codeElementId][$d_detail], 69, \PHP_EOL . '        ');
                                }
                                $r[] = $line;

                                $r[] = '        id: ' . $codeElementId . ' - ' . $d_sub_desc_attr['name'];
                                $r[] = '        ' . \wordwrap($d_sub_desc_attr['desc'], 69, \PHP_EOL . '        ');
                                $r[] = '        type: ' . $d_sub_desc_attr['type'];

                                $jsoncomposite[$d_sub_desc_attr['name']] = $d_detail;
                                if (isset($d_sub_desc_attr['maxlength'])) {
                                    $r[] = '        maxlen: ' . $d_sub_desc_attr['maxlength'];
                                }
                                if (isset($d_sub_desc_attr['required'])) {
                                    $r[] = '        required: ' . $d_sub_desc_attr['required'];
                                }
                                if (isset($d_sub_desc_attr['length'])) {
                                    $r[] = '        length: ' . $d_sub_desc_attr['length'];
                                }

                                // check for skipped data
                                unset(
                                    $d_sub_desc_attr['id'],
                                    $d_sub_desc_attr['name'],
                                    $d_sub_desc_attr['desc'],
                                    $d_sub_desc_attr['type'],
                                    $d_sub_desc_attr['maxlength'],
                                    $d_sub_desc_attr['required'],
                                    $d_sub_desc_attr['length']
                                );

                                /*
                                if (!empty($d_sub_desc_attr)) {
                                  var_dump($d_sub_desc_attr);
                                }
                                 */
                            }
                        }
                        $jsonelements[$d_desc_attr['name']] = $jsoncomposite;
                    } else {
                        $codeElementId = $d_desc_attr['id'];
                        $line = '  [' . $n . '] ' . $detail;
                        if(isset($this->codes[(int)$codeElementId][$detail])){
						  /* 
                           * for retrieving code element description when first element of the segment 
						   * is a data element and not a composite one. Ex: NAD segment.
                           * We rewrite also l1 line for adding 'id:' prefix before data element id. 
                           * It's just a cosmetic fix 
                           */
                          $line .= ' - ' . \wordwrap($this->codes[$codeElementId][$detail], 71, \PHP_EOL . '        ');
                          $l1 = '      id: ' . $d_desc_attr['id'] . ' - ' . $d_desc_attr['name'];
                        }
                        $r[] = $line;
                        $r[] = $l1;
                        $r[] = $l2;
                        $jsonelements[$d_desc_attr['name']] = $detail;
                    }
                }
                $jsonsegment[$attributes['name']] = $jsonelements;
            } else {
                $r[] = $id;
                $jsonsegment['UnrecognisedType'] = $segment;
            }
            $this->jsonedi[] = $jsonsegment;
        }

        return \implode(\PHP_EOL, $r);
    }

    /**
     * return the processed EDI in json format
     *
     * @return false|string
     */
    public function getJson()
    {
        return \json_encode($this->jsonedi);
    }

    /**
     * read default values in given message xml
     *
     * @param \SimpleXMLElement $message
     *
     * @return array
     */
    protected function readMessageDefaults(\SimpleXMLElement $message): array
    {
        // init
        $defaults = [];

        /* @var \SimpleXMLElement $defaultValueNode */
        foreach ($message->defaults[0] ?? [] as $defaultValueNode) {
            $attributes = $defaultValueNode->attributes();
            $id = (string) $attributes->id;
            $defaults[$id] = (string) $attributes->value;
        }

        return $defaults;
    }

    /**
     * read message segments and groups
     *
     * @param \SimpleXMLElement $element
     *
     * @return array
     */
    protected function readXmlNodes(\SimpleXMLElement $element): array
    {
        $arrayElements = [];
        foreach ($element as $name => $node) {
            if ($name == 'defaults') {
                continue;
            }
            $arrayElement = [];
            $arrayElement['type'] = $name;
            $arrayElement['attributes'] = $this->readAttributesArray($node);
            $details = $this->readXmlNodes($node);
            if (!empty($details)) {
                $arrayElement['details'] = $details;
            }
            $arrayElements[] = $arrayElement;
        }

        return $arrayElements;
    }

    /**
     * return an xml elements attributes in as array
     *
     * @param \SimpleXMLElement $element
     *
     * @return array
     */
    protected function readAttributesArray(\SimpleXMLElement $element): array
    {
        $attributes = [];
        foreach ($element->attributes() ?? [] as $attrName => $attr) {
            $attributes[(string) $attrName] = (string) $attr;
        }

        return $attributes;
    }
}