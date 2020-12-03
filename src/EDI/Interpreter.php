<?php

declare(strict_types=1);

namespace EDI;

use Arrayy\Arrayy;

/**
 * EDIFACT Messages Interpreter
 * (c) 2018 Stefano Sabatini
 */
class Interpreter
{
    /**
     * @var array
     */
    public $messageTextConf = [
        'MISSINGREQUIREDSEGMENT'      => 'Missing required segment',
        'MISSINGREQUIREDGROUP'        => 'Missing required group',
        'NOTCONFORMANT'               => "It looks like that this message isn't conformant to the mapping provided. (Not all segments were added)",
        'TOOMANYELEMENTS_COMPOSITE'   => 'This composite data element has more elements than expected',
        'TOOMANYELEMENTS'             => 'This segment has more data elements than expected',
        'MISSINGINTERCHANGEDELIMITER' => 'The file has at least one UNB or UNZ missing',
        'MISSINGMESSAGEDELIMITER'     => 'The message has at least one UNH or UNT missing',
    ];

    /**
     * @var array
     */
    public $segmentTemplates = [
        'DTM' => ['DTM', '999', 'XXX'],
    ];

    /**
     * @var array
     */
    public $groupTemplates = [
        'SG1' => [['TDT', '20', 'XXX']],
    ];

    /**
     * @var bool
     */
    private $patchFiles = true;

    /**
     * @var \SimpleXMLElement
     */
    private $xmlMsg;

    /**
     * @var array
     */
    private $xmlSeg;

    /**
     * @var array
     */
    private $xmlSvc;

    /**
     * @var array
     */
    private $ediGroups;

    /**
     * @var array
     */
    private $errors;

    /**
     * @var array
     */
    private $msgs;

    /**
     * @var array
     */
    private $serviceSeg;

    /**
     * @var array
     */
    private $codes;
 
    /**
     * @var callable
     */
    private $comparisonFunction;

    /**
     * @var string
     */
    private $outputKey = 'name';

    /**
     * @var string
     */
    private $currentGroup = '';

    /**
     * Split multiple messages and process
     *
     * @param string     $xmlMsg                        Path to XML Message representation
     * @param array      $xmlSeg                        Segments processed by EDI\Analyser::loadSegmentsXml
     * @param array      $xmlSvc                        Service segments processed by EDI\Analyser::loadSegmentsXml
     * @param array|null $messageTextConf               Personalisation of error messages
     */
    public function __construct(string $xmlMsg, array $xmlSeg, array $xmlSvc, array $messageTextConf = null)
    {
        // simplexml_load_file: This can be affected by a PHP bug #62577 (https://bugs.php.net/bug.php?id=62577)
        $xmlData = \file_get_contents($xmlMsg);
        if ($xmlData === false) {
            throw new \InvalidArgumentException('file_get_contents for "' . $xmlMsg . '" faild');
        }

        $xmlMsgTmp = \simplexml_load_string($xmlData);
        if ($xmlMsgTmp === false) {
            throw new \InvalidArgumentException('simplexml_load_string for "' . $xmlMsg . '" faild');
        }

        $this->xmlMsg = $xmlMsgTmp;
        $this->xmlSeg = $xmlSeg;
        $this->xmlSvc = $xmlSvc;
        if ($messageTextConf !== null) {
            $this->messageTextConf = \array_replace($this->messageTextConf, $messageTextConf);
        }
        $this->errors = [];

        $this->comparisonFunction = static function ($segment, $elm) {
            return $segment[0] == $elm['id'];
        };
    }

    /**
     * @param bool $flag
     *
     * @return void
     */
    public function togglePatching(bool $flag)
    {
        $this->patchFiles = $flag;
    }

    /**
     * Patch the error messages array
     *
     * @param array $messageTextConf An array with same keys as the internal $messageTextConf
     *
     * @return void
     */
    public function setMessageTextConf(array $messageTextConf)
    {
        $this->messageTextConf = \array_replace($this->messageTextConf, $messageTextConf);
    }

    /**
     * Add fake segments used to patch the message if a required segment is missing
     *
     * @param array $segmentTemplates An array with segments (having the segment name as key)
     *
     * @return void
     */
    public function setSegmentTemplates(array $segmentTemplates)
    {
        $this->segmentTemplates = $segmentTemplates;
    }

    /**
     * Add fake groups used to patch the message if a required group is missing
     *
     * @param array $groupTemplates An array with segments (having the group name as key)
     *
     * @return void
     */
    public function setGroupTemplates(array $groupTemplates)
    {
        $this->groupTemplates = $groupTemplates;
    }

    /**
     * Set the data parsed from the xml list of codes
     *
     * @param array $codes An array with codes from the chosen directory
     *
     * @return void
     */
    public function setCodes(array $codes)
    {
        $this->codes = $codes;
    }


    /**
     * Split multiple messages and process
     *
     * @param callable $func A function accepting two arguments, first is the segment array, then the element definition
     *
     * @return void
     */
    public function setComparisonFunction(callable $func)
    {
        $this->comparisonFunction = $func;
    }

    /**
     * Set to true if UNCEFACT XML ID should be used instead of names
     *
     * @param bool $toggle
     *
     * @return void
     */
    public function toggleUseIdInsteadOfNameForOutput(bool $toggle)
    {
        if ($toggle) {
            $this->outputKey = 'id';
        }
        else {
            $this->outputKey = 'name';
        }
    }

    /**
     * Split multiple messages and process
     *
     * @param array $parsed An array coming from EDI\Parser
     *
     * @return array
     */
    public function prepare(array $parsed): array
    {
        $this->msgs = $this->splitMessages($parsed, $this->errors);
        $groups = [];
        $service = $this->msgs['service'];
        $this->serviceSeg = $this->processService($service);

        foreach ($this->msgs as $k => $msg) {
            if ($k === 'service') {
                continue;
            }
            $grouped = $this->loopMessage($msg, $this->xmlMsg, $this->errors);
            $groups[] = $grouped['message'];
        }
        $this->ediGroups = $groups;

        return $groups;
    }

    /**
     * Get result as json.
     *
     * @param bool $pretty
     *
     * @return false|string
     */
    public function getJson(bool $pretty = false)
    {
        if ($pretty) {
            return \json_encode($this->ediGroups, \JSON_PRETTY_PRINT);
        }

        return \json_encode($this->ediGroups);
    }

    /**
     * Get result as Arrayy Object.
     *
     * @return Arrayy<mixed,mixed>
     */
    public function getArrayy()
    {
        return new Arrayy($this->ediGroups);
    }

    /**
     * Get errors
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Get splitted messages.
     *
     * @return array
     */
    public function getMessages(): array
    {
        return $this->msgs;
    }

    /**
     * Get service segments.
     *
     * @return array
     */
    public function getServiceSegments()
    {
        return $this->serviceSeg;
    }

    /**
     * Get json service segments.
     *
     * @param bool $pretty
     *
     * @return false|string
     */
    public function getJsonServiceSegments(bool $pretty = false)
    {
        if ($pretty) {
            return \json_encode($this->serviceSeg, \JSON_PRETTY_PRINT);
        }

        return \json_encode($this->serviceSeg);
    }

    /**
     * Get service segments as Arrayy Object.
     *
     * @return Arrayy<mixed,mixed>
     */
    public function getArrayyServiceSegments()
    {
        return new Arrayy($this->serviceSeg);
    }

    /**
     * Split multiple messages
     *
     * @param array $parsed An array coming from EDI\Parser
     * @param array $errors
     *
     * @return array
     */
    private function splitMessages(&$parsed, &$errors): array
    {
        // init
        $messages = [];
        $tmpmsg = [];
        $service = [];
        $hasInterchangeDelimiters = 0;
        $hasMessageDelimiters = 0;

        foreach ($parsed as $c => $segment) {
            switch ($segment[0]) {
                case 'UNB':
                    $hasInterchangeDelimiters = 0;
                    ++$hasInterchangeDelimiters;
                    $service['UNB'] = $segment;

                    break;
                case 'UNZ':
                    $hasInterchangeDelimiters--;
                    if ($hasInterchangeDelimiters != 0) {
                        $sid = ($hasInterchangeDelimiters < 0) ? 'UNB' : 'UNZ';
                        $errors[] = [
                            'text'      => $this->messageTextConf['MISSINGINTERCHANGEDELIMITER'],
                            'position'  => $c,
                            'segmentId' => $sid,
                        ];
                    }
                    $service['UNZ'] = $segment;
                    if ($this->patchFiles && $hasMessageDelimiters > 0) {
                        $segment = ['UNT', '0', '1'];
                        $hasMessageDelimiters--;
                        $tmpmsg[] = $segment;
                        $messages[] = $tmpmsg;
                    }
                    break;
                case 'UNH':
                    $hasMessageDelimiters = 0;
                    ++$hasMessageDelimiters;
                    $tmpmsg = [$segment];

                    break;
                case 'UNT':
                    $hasMessageDelimiters--;
                    $tmpmsg[] = $segment;
                    $messages[] = $tmpmsg;
                    if ($hasMessageDelimiters != 0) {
                        $sid = ($hasMessageDelimiters < 0) ? 'UNH' : 'UNT';
                        $errors[] = [
                            'text'      => $this->messageTextConf['MISSINGMESSAGEDELIMITER'],
                            'position'  => $c,
                            'segmentId' => $sid,
                        ];
                    }

                    break;
                default:
                    $tmpmsg[] = $segment;

                    break;
            }
        }

        if ($hasInterchangeDelimiters != 0) {
            $sid = ($hasInterchangeDelimiters < 0) ? 'UNB' : 'UNZ';
            $errors[] = [
                'text'      => $this->messageTextConf['MISSINGINTERCHANGEDELIMITER'],
                'position'  => $c ?? '',
                'segmentId' => $sid,
            ];
        }

        if ($hasMessageDelimiters != 0) {
            $sid = ($hasMessageDelimiters < 0) ? 'UNH' : 'UNT';
            $errors[] = [
                'text'      => $this->messageTextConf['MISSINGMESSAGEDELIMITER'],
                'position'  => $c ?? '',
                'segmentId' => $sid,
            ];
        }

        $messages['service'] = $service;

        return $messages;
    }

    /**
     * Transform a parsed edi in its groupings
     *
     * @param array             $message Single message (Without UNB and UNZ)
     * @param \SimpleXMLElement $xml     The xml representation of the message
     * @param array             $errors
     *
     * @return array
     */
    private function loopMessage(array &$message, \SimpleXMLElement $xml, array &$errors): array
    {
        // init
        $groupedEdi = [];
        $segmentIdx = 0;

        foreach ($xml->children() as $elm) {
            if ($elm->getName() == 'group') {
                $this->processXmlGroup($elm, $message, $segmentIdx, $groupedEdi, $errors);
            } elseif ($elm->getName() == 'segment') {
                $this->processXmlSegment($elm, $message, $segmentIdx, $groupedEdi, $errors);
            }
        }

        if ($segmentIdx != \count($message)) {
            $errors[] = [
                'text' => $this->messageTextConf['NOTCONFORMANT'],
            ];
        }

        return ['message' => $groupedEdi, 'errors' => $errors];
    }

    /**
     * Process an XML Group
     *
     * @param \SimpleXMLElement $elm
     * @param array             $message
     * @param int               $segmentIdx
     * @param array             $array
     * @param array             $errors
     *
     * @return void
     */
    private function processXmlGroup(\SimpleXMLElement $elm, array &$message, int &$segmentIdx, array &$array, array &$errors)
    {
        // init
        $groupVisited = false;
        $newGroup = [];

        for ($g = 0; $g < $elm['maxrepeat']; ++$g) {
            $grouptemp = [];
            if ($message[$segmentIdx][0] != $elm->children()[0]['id']) {
                if (
                    !$groupVisited
                    &&
                    isset($elm['required'])
                ) {
                    $elmType = $elm['id']->__toString();
                    $fixed = false;
                    if ($this->patchFiles && isset($this->groupTemplates[$elmType])) {
                        \array_splice($message, $segmentIdx, 0, $this->groupTemplates[$elmType]);
                        $fixed = true;
                    }

                    $errors[] = [
                        'text'      => $this->messageTextConf['MISSINGREQUIREDGROUP'] . ' ' . ($fixed ? '(patched)' : ''),
                        'position'  => $segmentIdx,
                        'segmentId' => $elmType,
                    ];
                } else {
                    break;
                }
            }

            $this->currentGroup = $elm['id']->__toString();

            foreach ($elm->children() as $elm2) {
                if ($elm2->getName() == 'group') {
                    $this->processXmlGroup($elm2, $message, $segmentIdx, $grouptemp, $errors);
                } else {
                    $this->processXmlSegment($elm2, $message, $segmentIdx, $grouptemp, $errors);
                }
                $groupVisited = true;
            }

            $newGroup[] = $grouptemp;
        }

        if (\count($newGroup) === 0) {
            return;
        }

        $array[$elm['id']->__toString()] = $newGroup;
    }

    /**
     * Process an XML Segment.
     *
     * @param \SimpleXMLElement $elm
     * @param array             $message
     * @param int               $segmentIdx
     * @param array             $array
     * @param array             $errors
     *
     * @return void
     */
    private function processXmlSegment(\SimpleXMLElement $elm, array &$message, int &$segmentIdx, array &$array, array &$errors)
    {
        // init
        $segmentVisited = false;

        for ($i = 0; $i < $elm['maxrepeat']; ++$i) {
            if (\call_user_func($this->comparisonFunction, $message[$segmentIdx], $elm)) {
                $jsonMessage = $this->processSegment($message[$segmentIdx], $this->xmlSeg, $segmentIdx, $errors);
                $segmentVisited = true;
                $this->doAddArray($array, $jsonMessage);
                ++$segmentIdx;
            } else {
                if (!$segmentVisited && isset($elm['required'])) {
                    $fixed = false;

                    if ($elm['replacewith'] !== null) {
                        $elmType = (string) $elm['replacewith'];
                    } else {
                        $elmType = (string) $elm['id'];
                    }

                    if ($this->patchFiles && isset($this->segmentTemplates[$elmType])) {
                        $jsonMessage = $this->processSegment($this->segmentTemplates[$elmType], $this->xmlSeg, $segmentIdx, $errors);
                        $fixed = true;
                        $this->doAddArray($array, $jsonMessage);
                    }

                    $errors[] = [
                        'text'      => $this->messageTextConf['MISSINGREQUIREDSEGMENT'] . ' ' . ($fixed ? '(patched)' : ''),
                        'position'  => $segmentIdx,
                        'segmentId' => (string) $elm['id'],
                    ];
                }

                return;
            }
        }
    }

    /**
     * Adds a processed segment to the current group.
     *
     * @param array $array       a reference to the group
     * @param array $jsonMessage a segment processed by processSegment()
     *
     * @return void
     */
    private function doAddArray(array &$array, array &$jsonMessage)
    {
        if (isset($array[$jsonMessage['key']])) {
            if (
                isset($array[$jsonMessage['key']]['segmentCode'])
                ||
                $jsonMessage['key'] === 'UnrecognisedType'
            ) {
                $temp = $array[$jsonMessage['key']];
                $array[$jsonMessage['key']] = [];
                $array[$jsonMessage['key']][] = $temp;
            }
            $array[$jsonMessage['key']][] = $jsonMessage['value'];
        } else {
            $array[$jsonMessage['key']] = $jsonMessage['value'];
        }
    }

    /**
     * Add human readable keys as in Analyser.
     *
     * @param array      $segment
     * @param array      $xmlMap
     * @param int|null   $segmentIdx
     * @param array|null $errors
     *
     * @return array
     */
    private function processSegment(array &$segment, array &$xmlMap, $segmentIdx, array &$errors = null): array
    {
        $id = $segment[0];

        $jsonsegment = [];
        if (isset($xmlMap[$id])) {
            $attributes = $xmlMap[$id]['attributes'];
            $details_desc = $xmlMap[$id]['details'];

            $jsonelements = ['segmentIdx' => $segmentIdx, 'segmentCode' => $id, 'segmentGroup' => $this->currentGroup];
            foreach ($segment as $idx => $detail) {
                $n = $idx - 1;
                if ($idx == 0) {
                    continue;
                }

                if (!isset($details_desc[$n])) {
                    $errors[] = [
                        'text'      => $this->messageTextConf['TOOMANYELEMENTS'],
                        'position'  => $segmentIdx,
                        'segmentId' => $id,
                    ];
                    $jsonelements['Extension' . $n] = $detail;

                    continue;
                }

                $d_desc_attr = $details_desc[$n]['attributes'];

                $jsoncomposite = [];
                if (
                    $detail !== ''
                    &&
                    isset($details_desc[$n]['details'])
                ) {
                    $sub_details_desc = $details_desc[$n]['details'];

                    if (\is_array($detail)) {
                        foreach ($detail as $d_n => $d_detail) {
                            if (!isset($sub_details_desc[$d_n])) {
                                $errors[] = [
                                    'text'      => $this->messageTextConf['TOOMANYELEMENTS_COMPOSITE'],
                                    'position'  => $segmentIdx . '/' . $idx,
                                    'segmentId' => $id,
                                ];
                                $jsoncomposite['CompositeExtension' . $d_n] = $d_detail;

                                continue;
                            }

                            $d_sub_desc_attr = $sub_details_desc[$d_n]['attributes'];

                            if ($this->codes !== null && $this->codes[$d_sub_desc_attr['id']] !== null) { //if codes is set enable translation of the value
                                if ($this->codes[$d_sub_desc_attr['id']][$d_detail]) {
                                    $d_detail = $this->codes[$d_sub_desc_attr['id']][$d_detail];
                                }
                            }

                            if (!isset($jsoncomposite[$d_sub_desc_attr[$this->outputKey]])) { //New
                                $jsoncomposite[$d_sub_desc_attr[$this->outputKey]] = $d_detail;
                            } elseif (\is_string($jsoncomposite[$d_sub_desc_attr[$this->outputKey]])) { // More data than one string
                                $jsoncomposite[$d_sub_desc_attr[$this->outputKey]] = [
                                    $jsoncomposite[$d_sub_desc_attr[$this->outputKey]],
                                    $d_detail,
                                ];
                            } else { // More and more
                                $jsoncomposite[$d_sub_desc_attr[$this->outputKey]][] = $d_detail;
                            }
                        }
                    } else {
                        $d_sub_desc_attr = $sub_details_desc[0]['attributes'];

                        if ($this->codes !== null && $this->codes[$d_sub_desc_attr['id']] !== null) { //if codes is set enable translation of the value
                            if ($this->codes[$d_sub_desc_attr['id']][$detail]) {
                                $detail = $this->codes[$d_sub_desc_attr['id']][$detail];
                            }
                        }
                        $jsoncomposite[$d_sub_desc_attr[$this->outputKey]] = $detail;
                    }
                } else {
                    if ($this->codes !== null && $this->codes[$d_desc_attr['id']] !== null) { //if codes is set enable translation of the value
                        if ($this->codes[$d_desc_attr['id']][$detail]) {
                            $detail = $this->codes[$d_desc_attr['id']][$detail];
                        }
                    }
                    $jsoncomposite = $detail;
                }

                if (\array_key_exists($d_desc_attr[$this->outputKey], $jsonelements)) {
                    $jsonelements[$d_desc_attr[$this->outputKey] . $n] = $jsoncomposite;
                } else {
                    $jsonelements[$d_desc_attr[$this->outputKey]] = $jsoncomposite;
                }
            }
            $jsonsegment['key'] = $attributes[$this->outputKey];
            $jsonsegment['value'] = $jsonelements;
        } elseif ($xmlMap !== $this->xmlSvc) {
            $jsonsegment = $this->processSegment($segment, $this->xmlSvc, $segmentIdx, $errors);
        } else {
            $jsonsegment['key'] = 'UnrecognisedType';
            $jsonsegment['value'] = $segment;
        }

        return $jsonsegment;
    }

    /**
     * Process UNB / UNZ segments
     *
     * @param array $segments
     *
     * @return array
     */
    private function processService(array &$segments): array
    {
        // init
        $processed = [];

        foreach ($segments as &$seg) {
            $jsonsegment = $this->processSegment($seg, $this->xmlSvc, null);
            $processed[$jsonsegment['key']] = $jsonsegment['value'];
        }

        return $processed;
    }
}
