<?php
/**
EDIFACT Messages Parser
(c)2016 Uldis Nelsons
*/

namespace EDI;

class Analyser
{

    public $segments;
    private $jsonedi;

    /**
     * @param string $message_xml_file
     * @return array
     */
    public function loadMessageXml($message_xml_file)
    {
        $messageXmlString = file_get_contents($message_xml_file);
        $messageXml = new \SimpleXMLIterator($messageXmlString);
        unset($messageXmlString);
        $message = [
        "defaults" => $this->readMessageDefaults($messageXml),
        "segments" => $this->readXmlNodes($messageXml),
        ];
        unset($messageXml);
        return $message;
    }

    /**
     * read default values in given message xml
     * @param \SimpleXmlElement $message
     * @return array
     */
    protected function readMessageDefaults(\SimpleXmlElement $message)
    {
        $defaults = array();
        $defaultsNode = isset($message->defaults[0]) ? $message->defaults[0] : array();
        /**
         * @var \SimpleXMLElement $defaultValueNode
         */
        foreach ($defaultsNode as $defaultValueNode) {
            $attributes = $defaultValueNode->attributes();
            $id = (string) $attributes->id;
            $value = (string) $attributes->value;
            $defaults[$id] = $value;
        }
        return $defaults;
    }

    /**
     * read message segments and groups
     * @param \SimpleXmlElement $element
     * @return array
     */
    protected function readXmlNodes(\SimpleXmlElement $element)
    {
        $arrayElements = [];
        foreach ($element as $name => $node) {
            if ($name == "defaults") {
                continue;
            }
            $arrayElement = [];
            $arrayElement["type"] = $name;
            $arrayElement["attributes"] = $this->readAttributesArray($node);
            $details = $this->readXmlNodes($node);
            if (!empty($details)) {
                $arrayElement["details"] = $details;
            }
            $arrayElements[] = $arrayElement;
        }
        return $arrayElements;
    }

    /**
     * return an xml elements attributes in as array
     * @param \SimpleXmlElement $element
     * @return array
     */
    protected function readAttributesArray(\SimpleXmlElement $element)
    {
        $attributes = [];
        foreach ($element->attributes() as $attrName => $attr) {
            $attributes[$attrName] = (string) $attr;
        }
        return $attributes;
    }


    /**
     * get all data element codes
     * @param string $codesXml
     * @return array
     */
    public function loadCodesXml($codesXml)
    {
        $codesXmlString = file_get_contents($codesXml);
        $codesXml = new \SimpleXMLIterator($codesXmlString);
        unset($codesXmlString);
        $codes = [];
        /**
         * @var \SimpleXmlIterator $codeCollection
         */
        foreach ($codesXml as $codeCollection) {
            $id = (string)$codeCollection->attributes()->id;
            $codes[$id] = [];
            /**
             * @var \SimpleXmlIterator $codeNode
             */
            foreach ($codeCollection as $codeNode) {
                $codeAttributes = $codeNode->attributes();
                $code = (string)$codeAttributes->id;
                $desc = (string)$codeAttributes->desc;
                $codes[$id][$code] = $desc;
            }
        }
        unset($codesXml);
        return $codes;
    }

    /**
     * convert segment definition from XML to array. Sequence of data_elements and
     * composite_data_element same as in XML
     * @param string $segment_xml_file
     * @return array
     */
    public function loadSegmentsXml($segment_xml_file)
    {

        $segments_xml = file_get_contents($segment_xml_file);

        $xml = simplexml_load_string($segments_xml);
        unset($segments_xml);
        $this->segments = array();

        /**
         * @var \SimpleXmlElement $segmentNode
         */
        foreach ($xml as $segmentNode) {
            $qualifier = (string)$segmentNode->attributes()->id;
            $segment = [];
            $segment["attributes"] = $this->readAttributesArray($segmentNode);
            $details = $this->readXmlNodes($segmentNode);
            if (!empty($details)) {
                $segment["details"] = $details;
            }
            $this->segments[$qualifier] = $segment;
        }
        return $this->segments;
    }

    /**
     * create readable EDI MESSAGE with comments
     * @param array $data by EDI\Parser:parse() created array from plain EDI message
     * @param array $rawSegments (optional) List of raw segments from EDI\Parser::getRawSegments
     * @return string file
     */
    public function process($data, $rawSegments = null)
    {
        $r = array();
        foreach ($data as $nrow => $segment) {

            $id = $segment[0];

            $r[] = '';
            $jsonsegment = [];
            if (isset($rawSegments, $rawSegments[$nrow])) {
                $r[] = trim($rawSegments[$nrow]);
            }

            if (isset($this->segments[$id])) {

                $attributes = $this->segments[$id]['attributes'];
                $details_desc = $this->segments[$id]['details'];

                $r[] = $id . ' - ' . $attributes['name'];
                $r[] = '  (' . wordwrap($attributes['desc'], 75, PHP_EOL.'  ') . ')';

                $jsonelements = ["segmentCode" => $id];
                foreach ($segment as $idx => $detail) {
                    $n = $idx-1;
                    if ($idx == 0 || !isset($details_desc[$n])) {
                        continue;
                    }
                    $d_desc_attr =  $details_desc[$n]['attributes'];
                    $l1 = '      ' . $d_desc_attr['id'] . ' - ' . $d_desc_attr['name'];
                    $l2 = '      ' . wordwrap($d_desc_attr['desc'], 71, PHP_EOL.'      ');

                    if (!is_array($detail)) {
                        $r[] = '  [' . $n . '] ' . $detail;
                        $r[] = $l1;
                        $r[] = $l2;
                        $jsonelements[$d_desc_attr['name']] = $detail;
                    } else {
                        $r[] = '  [' . $n . '] ' . implode(',', $detail);
                        $r[] = $l1;
                        $r[] = $l2;

                        $jsoncomposite = [];
                        if(isset($details_desc[$n]['details'])){
                            $sub_details_desc =  $details_desc[$n]['details'];

                            foreach ($detail as $d_n => $d_detail) {
                                $d_sub_desc_attr =  $sub_details_desc[$d_n]['attributes'];
                                $r[] = '    [' . $d_n . '] ' . $d_detail;
                                $r[] = '        id: ' . $d_sub_desc_attr['id'] . ' - ' . $d_sub_desc_attr['name'];
                                $r[] = '        ' . wordwrap($d_sub_desc_attr['desc'], 69, PHP_EOL.'        ');
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

                                //check for skipped data
                                unset($d_sub_desc_attr['id']);
                                unset($d_sub_desc_attr['name']);
                                unset($d_sub_desc_attr['desc']);
                                unset($d_sub_desc_attr['type']);
                                unset($d_sub_desc_attr['maxlength']);
                                unset($d_sub_desc_attr['required']);
                                unset($d_sub_desc_attr['length']);
                                if (!empty($d_sub_desc_attr)) {
                                    var_dump($d_sub_desc_attr);
                                }

                            }
                        }
                        $jsonelements[$d_desc_attr['name']] = $jsoncomposite;
                        //exit;
                    }
                }
                $jsonsegment[$attributes['name']] = $jsonelements;
            } else {
                $r[] = $id;
                $jsonsegment["UnrecognisedType"] = $segment;
            }
            $this->jsonedi[] = $jsonsegment;
        }

        return implode(PHP_EOL, $r);
    }

    /**
     * return the processed EDI in json format
     * @return string json
     */
    public function getJson()
    {
        return json_encode($this->jsonedi);
    }
}
