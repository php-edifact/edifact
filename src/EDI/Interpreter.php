<?php
/**
 * EDIFACT Messages Interpreter
 * (c)2016 Stefano Sabatini
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
    public $messageTextConf = [
        'MISSINGREQUIREDSEGMENT' => "Missing required segment",
        'NOTCONFORMANT' => "It looks like that this message isn't conformant to the mapping provided. (Not all segments were added)"
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
    }

  /**
   * Split multiple messages and process
   *
   * @param  $parsed An array coming from EDI\Parser
   * @return array
   */
    public function prepare($parsed)
    {
        $this->msgs = self::splitMessages($parsed);
        $groups = [];
        $errors = [];
        $service = $this->msgs['service'];
        $this->serviceSeg = $this->processService($service);

        foreach ($this->msgs as $k => $msg) {
            if ($k === 'service') {
                continue;
            }
            $grouped = $this->loopMessage($msg, $this->xmlMsg);
            $groups[] = $grouped['message'];
            $errors[] = $grouped['errors'];
        }
        $this->ediGroups = $groups;
        $this->errors = $errors;
        return $groups;
    }

  /**
   * Split multiple messages
   *
   * @param  $parsed An array coming from EDI\Parser
   * @return array
   */
    private static function splitMessages($parsed)
    {
        $messages = [];
        $tmpmsg = [];
        $service = [];

        foreach ($parsed as $segment) {
            switch ($segment[0]) {
                case 'UNB':
                    $service['UNB'] = $segment;
                    break;
                case 'UNZ':
                    $service['UNZ'] = $segment;
                    break;
                case 'UNH':
                    $tmpmsg = [$segment];
                    break;
                case 'UNT':
                    $tmpmsg[] = $segment;
                    $messages[] = $tmpmsg;
                    break;
                default:
                    $tmpmsg[] = $segment;
                    break;
            }
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
    private function loopMessage($message, $xml)
    {
        $groupedEdi = [];
        $errors = [];
        $segmentIdx = 0;
        foreach ($xml->children() as $elm) {
            if ($elm->getName()=="group") {
                /* FIRST LEVEL GROUP */
                $newGroup = [];
                for ($g = 0; $g < $elm['maxrepeat']; $g++) {
                    $grouptemp=[];
                    if ($message[$segmentIdx][0] != $elm->children()[0]['id']) {
                        break;
                    }
                    foreach ($elm->children() as $elm2) {
                        if ($elm2->getName()=="group") {
                            /* GROUP INSIDE A GROUP */
                            $newGroup2 = [];
                            for ($g2 = 0; $g2 < $elm2['maxrepeat']; $g2++) {
                                $group2temp=[];
                                if ($message[$segmentIdx][0] != $elm2->children()[0]['id']) {
                                    break;
                                }
                                foreach ($elm2->children() as $elm3) {
                                    $segmentVisited = false;
                                    for ($i = 0; $i < $elm3['maxrepeat']; $i++) {
                                        if ($message[$segmentIdx][0] == $elm3['id']) {
                                            $jsonMessage = self::processSegment($message[$segmentIdx], $this->xmlSeg, $segmentIdx);
                                            $segmentVisited = true;
                                            if (!isset($group2temp[$jsonMessage['key']])) {
                                                $group2temp[$jsonMessage['key']]=$jsonMessage['value'];
                                            } else {
                                                if (isset($group2temp[$jsonMessage['key']]['segmentCode'])) {
                                                    $temp = $group2temp[$jsonMessage['key']];
                                                    $group2temp[$jsonMessage['key']] = [];
                                                    $group2temp[$jsonMessage['key']][]=$temp;
                                                }
                                                $group2temp[$jsonMessage['key']][]=$jsonMessage['value'];
                                            }
                                            $segmentIdx++;
                                        } else {
                                            if (!$segmentVisited && isset($elm3['required'])) {
                                                $errors[] = [
                                                    "text" => $this->messageTextConf['MISSINGREQUIREDSEGMENT'],
                                                    "position" => $segmentIdx,
                                                    "segmentId" => $elm3['id']->__toString()
                                                ];
                                            }
                                            break;
                                        }
                                    }
                                }
                                if (count($group2temp) == 0) {
                                    continue;
                                }
                                $newGroup2[] = $group2temp;
                            }
                            if (count($newGroup2) == 0) {
                                continue;
                            }
                            $grouptemp[$elm2['id']->__toString()] = $newGroup2;
                        } else {
                            /* SEGMENT INSIDE A GROUP */
                            $segmentVisited = false;
                            for ($i = 0; $i < $elm2['maxrepeat']; $i++) {
                                if ($message[$segmentIdx][0] == $elm2['id']) {
                                    $jsonMessage = self::processSegment($message[$segmentIdx], $this->xmlSeg, $segmentIdx);
                                    $segmentVisited = true;
                                    if (!isset($grouptemp[$jsonMessage['key']])) {
                                        $grouptemp[$jsonMessage['key']]=$jsonMessage['value'];
                                    } else {
                                        if (isset($grouptemp[$jsonMessage['key']]['segmentCode'])) {
                                            $temp = $grouptemp[$jsonMessage['key']];
                                            $grouptemp[$jsonMessage['key']] = [];
                                            $grouptemp[$jsonMessage['key']][]=$temp;
                                        }
                                        $grouptemp[$jsonMessage['key']][]=$jsonMessage['value'];
                                    }
                                    $segmentIdx++;
                                } else {
                                    if (!$segmentVisited && isset($elm2['required'])) {
                                        $errors[] = [
                                                "text" => $this->messageTextConf['MISSINGREQUIREDSEGMENT'],
                                                "position" => $segmentIdx,
                                                "segmentId" => $elm2['id']->__toString()
                                            ];
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    $newGroup[] = $grouptemp;
                }
                if (count($newGroup) == 0) {
                    continue;
                }
                $groupedEdi[$elm['id']->__toString()] = $newGroup;
            } elseif ($elm->getName()=="segment") {
                /* FIRST LEVEL SEGMENT */
                $segmentVisited = false;
                for ($i = 0; $i < $elm['maxrepeat']; $i++) {
                    if ($message[$segmentIdx][0] == $elm['id']) {
                        $jsonMessage = self::processSegment($message[$segmentIdx], $this->xmlSeg, $segmentIdx);
                        $segmentVisited = true;
                        if (!isset($groupedEdi[$jsonMessage['key']])) {
                            $groupedEdi[$jsonMessage['key']]=$jsonMessage['value'];
                        } else {
                            if (isset($groupedEdi[$jsonMessage['key']]['segmentCode'])) {
                                $temp = $groupedEdi[$jsonMessage['key']];
                                $groupedEdi[$jsonMessage['key']] = [];
                                $groupedEdi[$jsonMessage['key']][]=$temp;
                            }
                            $groupedEdi[$jsonMessage['key']][]=$jsonMessage['value'];
                        }
                        $segmentIdx++;
                    } else {
                        if (!$segmentVisited && isset($elm['required'])) {
                            $errors[] = [
                                    "text" => $this->messageTextConf['MISSINGREQUIREDSEGMENT'],
                                    "position" => $segmentIdx,
                                    "segmentId" => $elm['id']->__toString()
                                ];
                        }
                        break;
                    }
                }

            } elseif ($elm->getName()=="defaults") {

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
   * Add human readable keys as in Analyser
   *
   * @param $segment
   */
    private static function processSegment($segment, $xmlMap, $segmentIdx)
    {
        $id = $segment[0];

        $jsonsegment = [];
        if (isset($xmlMap[$id])) {

            $attributes = $xmlMap[$id]['attributes'];
            $details_desc = $xmlMap[$id]['details'];

            $jsonelements = ["segmentIdx" => $segmentIdx, "segmentCode" => $id];
            foreach ($segment as $idx => $detail) {
                $n = $idx-1;
                if ($idx == 0 || !isset($details_desc[$n])) {
                    continue;
                }
                $d_desc_attr =  $details_desc[$n]['attributes'];

                $jsoncomposite = [];
                if (isset($details_desc[$n]['details']) && $detail !== '') {
                    $sub_details_desc =  $details_desc[$n]['details'];
                    if (!is_array($detail)) {
                        $d_sub_desc_attr =  $sub_details_desc[0]['attributes'];
                        $jsoncomposite[$d_sub_desc_attr['name']] = $detail;
                    } else {
                        foreach ($detail as $d_n => $d_detail) {
                            $d_sub_desc_attr =  $sub_details_desc[$d_n]['attributes'];
                            $jsoncomposite[$d_sub_desc_attr['name']][$d_n] = $d_detail;
                        }
                    }
                } else {
                    $jsoncomposite = $detail;
                }
                $jsonelements[$d_desc_attr['name']] = $jsoncomposite;
            }
            $jsonsegment['key'] = $attributes['name'];
            $jsonsegment['value'] = $jsonelements;

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
            $jsonsegment = self::processSegment($seg, $this->xmlSvc, null);
            $processed[$jsonsegment['key']]=$jsonsegment['value'];
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
