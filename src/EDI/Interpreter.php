<?php
/**
 * EDIFACT Messages Interpreter
 * (c) 2018 Stefano Sabatini
 */

namespace EDI;

class Interpreter
{
    private $xmlMsg;
    private $xmlSeg;
    private $xmlSvc;
    private $ediGroups;
    private $errors;
    private $msgs;
    private $serviceSeg;

    private $comparisonFunction;

    public $messageTextConf = [
        'MISSINGREQUIREDSEGMENT' => "Missing required segment",
        'MISSINGREQUIREDGROUP' => "Missing required group",
        'NOTCONFORMANT' => "It looks like that this message isn't conformant to the mapping provided. (Not all segments were added)",
        'TOOMANYELEMENTS_COMPOSITE' => "This composite data element has more elements than expected",
        'TOOMANYELEMENTS' => "This segment has more data elements than expected",
        'MISSINGINTERCHANGEDELIMITER' => "The file has at least one UNB or UNZ missing",
        'MISSINGMESSAGEDELIMITER' => "The message has at least one UNH or UNT missing"
    ];

    public $segmentTemplates = [
        'DTM' => ['DTM', '999', 'XXX']
    ];

    public $groupTemplates = [
        'SG1' =>
            [['TDT', '20', 'XXX']]
    ];

    /**
     * Split multiple messages and process
     *
     * @param string $xmlMsg Path to XML Message representation
     * @param array $xmlSeg Segments processed by EDI\Analyser::loadSegmentsXml
     * @param string $xmlSvc Service segments processed by EDI\Analyser::loadSegmentsXml
     * @param array $messageTextConf Personalisation of error messages
     */
    public function __construct($xmlMsg, $xmlSeg, $xmlSvc, $messageTextConf = null)
    {
        $this->xmlMsg = simplexml_load_file($xmlMsg);
        $this->xmlSeg = $xmlSeg;
        $this->xmlSvc = $xmlSvc;
        if ($messageTextConf !== null) {
            $this->messageTextConf = array_replace($this->messageTextConf, $messageTextConf);
        }
        $this->errors = [];

        $this->comparisonFunction = function ($segment, $elm) {
            return $segment[0] == $elm['id'];
        };
    }

    /**
     * Patch the error messages array
     *
     * @param  $messageTextConf An array with same keys as the internal $messageTextConf
     * @return void
     */
    public function setMessageTextConf($messageTextConf) {
        $this->messageTextConf = array_replace($this->messageTextConf, $messageTextConf);
    }

    /**
     * Add fake segments used to patch the message if a required segment is missing
     *
     * @param  $segmentTemplates An array with segments (having the segment name as key)
     * @return void
     */
    public function setSegmentTemplates($segmentTemplates) {
        $this->segmentTemplates = $segmentTemplates;
    }

    /**
     * Add fake groups used to patch the message if a required group is missing
     *
     * @param  $groupTemplates An array with segments (having the group name as key)
     * @return void
     */
    public function setGroupTemplates($groupTemplates) {
        $this->groupTemplates = $groupTemplates;
    }

    /**
     * Split multiple messages and process
     *
     * @param  $func A function accepting two arguments, first is the segment array, then the element definition
     * @return void
     */
    public function setComparisonFunction(callable $func) {
        $this->comparisonFunction = $func;
    }

    /**
     * Split multiple messages and process
     *
     * @param  $parsed An array coming from EDI\Parser
     * @return array
     */
    public function prepare($parsed)
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
     * Split multiple messages
     *
     * @param  $parsed An array coming from EDI\Parser
     * @return array
     */
    private function splitMessages($parsed, &$errors)
    {
        $messages = [];
        $tmpmsg = [];
        $service = [];
        $hasInterchangeDelimiters = 0;
        $hasMessageDelimiters = 0;

        foreach ($parsed as $c => $segment) {
            switch ($segment[0]) {
                case 'UNB':
                    $hasInterchangeDelimiters = 0;
                    $hasInterchangeDelimiters++;
                    $service['UNB'] = $segment;
                    break;
                case 'UNZ':
                    $hasInterchangeDelimiters--;
                    if ($hasInterchangeDelimiters != 0) {
                        $sid = ($hasInterchangeDelimiters < 0) ? "UNB": "UNZ";
                        $errors[] = [
                            "text" => $this->messageTextConf['MISSINGINTERCHANGEDELIMITER'],
                            "position" => $c,
                            "segmentId" => $sid
                        ];
                    }
                    $service['UNZ'] = $segment;
                    break;
                case 'UNH':
                    $hasMessageDelimiters = 0;
                    $hasMessageDelimiters++;
                    $tmpmsg = [$segment];
                    break;
                case 'UNT':
                    $hasMessageDelimiters--;
                    $tmpmsg[] = $segment;
                    $messages[] = $tmpmsg;
                    if ($hasMessageDelimiters != 0) {
                        $sid = ($hasMessageDelimiters < 0) ? "UNH": "UNT";
                        $errors[] = [
                            "text" => $this->messageTextConf['MISSINGMESSAGEDELIMITER'],
                            "position" => $c,
                            "segmentId" => $sid
                        ];
                    }
                    break;
                default:
                    $tmpmsg[] = $segment;
                    break;
            }
        }

        if ($hasInterchangeDelimiters != 0) {
            $sid = ($hasInterchangeDelimiters < 0) ? "UNB": "UNZ";
            $errors[] = [
                "text" => $this->messageTextConf['MISSINGINTERCHANGEDELIMITER'],
                "position" => $c,
                "segmentId" => $sid
            ];
        }
        if ($hasMessageDelimiters != 0) {
            $sid = ($hasMessageDelimiters < 0) ? "UNH": "UNT";
            $errors[] = [
                "text" => $this->messageTextConf['MISSINGMESSAGEDELIMITER'],
                "position" => $c,
                "segmentId" => $sid
            ];
        }
        $messages['service'] = $service;
        return $messages;
    }

    /**
     * Transform a parsed edi in its groupings
     *
     * @param  $message Single message (Without UNB and UNZ)
     * @param  $xml The xml representation of the message
     * @return array
     */
    private function loopMessage($message, $xml, &$errors)
    {
        $groupedEdi = [];
        $segmentIdx = 0;

        foreach ($xml->children() as $elm) {
            if ($elm->getName() == "group") {
                $this->processXmlGroup($elm, $message, $segmentIdx, $groupedEdi, $errors);
            } elseif ($elm->getName() == "segment") {
                $this->processXmlSegment($elm, $message, $segmentIdx, $groupedEdi, $errors);
            } elseif ($elm->getName() == "defaults") {

            }
        }

        if ($segmentIdx != count($message)) {
            $errors[] = [
                "text" => $this->messageTextConf['NOTCONFORMANT']
            ];
        }
        return ['message' => $groupedEdi, 'errors' => $errors];
    }

    /**
     * Process an XML Group
     *
     */
    private function processXmlGroup($elm, &$message, &$segmentIdx, &$array, &$errors)
    {
        $groupVisited = false;
        $newGroup = [];
        for ($g = 0; $g < $elm['maxrepeat']; $g++) {
            $grouptemp = [];
            if ($message[$segmentIdx][0] != $elm->children()[0]['id']) {
                if (!$groupVisited && isset($elm['required'])) {
                    $elmType = $elm['id']->__toString();
                    $fixed = false;
                    if (isset($this->groupTemplates[$elmType])) {
                        array_splice($message, $segmentIdx, 0, $this->groupTemplates[$elmType]);
                        $fixed = true;
                    }
                    $errors[] = [
                        "text" => $this->messageTextConf['MISSINGREQUIREDGROUP']." ".($fixed ? '(patched)' : ''),
                        "position" => $segmentIdx,
                        "segmentId" => $elmType
                    ];
                } else {
                    break;
                }
            }
            foreach ($elm->children() as $elm2) {
                if ($elm2->getName() == "group") {
                    $this->processXmlGroup($elm2, $message, $segmentIdx, $grouptemp, $errors);
                } else {
                    $this->processXmlSegment($elm2, $message, $segmentIdx, $grouptemp, $errors);
                }
                $groupVisited = true;
            }

            $newGroup[] = $grouptemp;

        }
        if (count($newGroup) == 0) {
            return;
        }
        $array[$elm['id']->__toString()] = $newGroup;
    }

    /**
     * Process an XML Segment
     *
     */
    private function processXmlSegment($elm, $message, &$segmentIdx, &$array, &$errors)
    {
        $segmentVisited = false;
        for ($i = 0; $i < $elm['maxrepeat']; $i++) {
            if (call_user_func($this->comparisonFunction, $message[$segmentIdx], $elm)) {
                $jsonMessage = $this->processSegment($message[$segmentIdx], $this->xmlSeg, $segmentIdx, $errors);
                $segmentVisited = true;
                $this->doAddArray($array, $jsonMessage);
                $segmentIdx++;
            } else {
                if (!$segmentVisited && isset($elm['required'])) {
                    $fixed = false;
                    $elmType = $elm['id']->__toString();
                    if ($elm['replacewith'] !== null) {
                        $elmType = $elm['replacewith']->__toString();
                    }
                    if (isset($this->segmentTemplates[$elmType])) {
                        $jsonMessage = $this->processSegment($this->segmentTemplates[$elmType], $this->xmlSeg, $segmentIdx, $errors);
                        $segmentVisited = true;
                        $fixed = true;
                        $this->doAddArray($array, $jsonMessage);
                    }
                    $errors[] = [
                        "text" => $this->messageTextConf['MISSINGREQUIREDSEGMENT']." ".($fixed ? '(patched)' : ''),
                        "position" => $segmentIdx,
                        "segmentId" => $elm['id']->__toString(),
                    ];
                }
                return;
            }
        }
    }

    /**
     * Adds a processed segment to the current group
     *
     * @param $array A reference to the group
     * @param $jsonMessage A segment processed by processSegment()
     */
    private function doAddArray(&$array, $jsonMessage) {
        if (!isset($array[$jsonMessage['key']])) {
            $array[$jsonMessage['key']] = $jsonMessage['value'];
        } else {
            if (isset($array[$jsonMessage['key']]['segmentCode']) || $jsonMessage['key'] === 'UnrecognisedType') {
                $temp = $array[$jsonMessage['key']];
                $array[$jsonMessage['key']] = [];
                $array[$jsonMessage['key']][] = $temp;
            }
            $array[$jsonMessage['key']][] = $jsonMessage['value'];
        }
    }

    /**
     * Add human readable keys as in Analyser
     *
     * @param $segment
     */
    private function processSegment($segment, &$xmlMap, $segmentIdx, &$errors = null)
    {
        $id = $segment[0];

        $jsonsegment = [];
        if (isset($xmlMap[$id])) {
            $attributes = $xmlMap[$id]['attributes'];
            $details_desc = $xmlMap[$id]['details'];

            $jsonelements = ["segmentIdx" => $segmentIdx, "segmentCode" => $id];
            foreach ($segment as $idx => $detail) {
                $n = $idx - 1;
                if ($idx == 0) {
                    continue;
                }

                if (!isset($details_desc[$n])) {
                    $errors[] = [
                        "text" => $this->messageTextConf['TOOMANYELEMENTS'],
                        "position" => $segmentIdx,
                        "segmentId" => $id,
                    ];
                    $jsonelements["Extension".$n] = $detail;
                    continue;
                }

                $d_desc_attr = $details_desc[$n]['attributes'];

                $jsoncomposite = [];
                if (isset($details_desc[$n]['details']) && $detail !== '') {
                    $sub_details_desc = $details_desc[$n]['details'];
                    if (!is_array($detail)) {
                        $d_sub_desc_attr = $sub_details_desc[0]['attributes'];
                        $jsoncomposite[$d_sub_desc_attr['name']] = $detail;
                    } else {
                        foreach ($detail as $d_n => $d_detail) {
                            if (!isset($sub_details_desc[$d_n])) {
                                $errors[] = [
                                    "text" => $this->messageTextConf['TOOMANYELEMENTS_COMPOSITE'],
                                    "position" => $segmentIdx."/".$idx,
                                    "segmentId" => $id,
                                ];
                                $jsoncomposite["CompositeExtension".$d_n] = $d_detail;
                                continue;
                            }
                            $d_sub_desc_attr = $sub_details_desc[$d_n]['attributes'];
                            if (!isset($jsoncomposite[$d_sub_desc_attr['name']])) { //New
                                $jsoncomposite[$d_sub_desc_attr['name']] = $d_detail;
                            } elseif (is_string($jsoncomposite[$d_sub_desc_attr['name']])) { // More data than one string
                                $jsoncomposite[$d_sub_desc_attr['name']] = array($jsoncomposite[$d_sub_desc_attr['name']], $d_detail);
                            } else { // More and more
                                $jsoncomposite[$d_sub_desc_attr['name']][] = $d_detail;
                            }
                        }
                    }
                } else {
                    $jsoncomposite = $detail;
                }

                if (array_key_exists($d_desc_attr['name'], $jsonelements)) {
                    $jsonelements[$d_desc_attr['name'].$n] = $jsoncomposite;
                } else {
                    $jsonelements[$d_desc_attr['name']] = $jsoncomposite;
                }

            }
            $jsonsegment['key'] = $attributes['name'];
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
     */
    private function processService($segments)
    {
        $processed = [];
        foreach ($segments as $seg) {
            $jsonsegment = $this->processSegment($seg, $this->xmlSvc, null);
            $processed[$jsonsegment['key']] = $jsonsegment['value'];
        }
        return $processed;
    }

    /**
     * Get result as json
     */
    public function getJson($pretty = false)
    {
        if ($pretty) {
            return json_encode($this->ediGroups, JSON_PRETTY_PRINT);
        } else {
            return json_encode($this->ediGroups);
        }
    }

    /**
     * Get errors
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Get splitted messages
     */
    public function getMessages()
    {
        return $this->msgs;
    }

    /**
     * Get service segments
     */
    public function getServiceSegments()
    {
        return $this->serviceSeg;
    }

    /**
     * Get json service segments
     */
    public function getJsonServiceSegments($pretty = false)
    {
        if ($pretty) {
            return json_encode($this->serviceSeg, JSON_PRETTY_PRINT);
        } else {
            return json_encode($this->serviceSeg);
        }
    }
}
