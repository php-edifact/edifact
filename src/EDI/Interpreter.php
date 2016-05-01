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
    private $ediGroups;

    /**
   * Split multiple messages and process
   *
   * @param string $xmlMsg Path to XML Message representation
   * @param array $xmlSeg Segments processed by EDI\Analyser::loadSegmentsXml
   */
    public function __construct($xmlMsg, $xmlSeg)
    {
        $this->xmlMsg = simplexml_load_file($xmlMsg);
        $this->xmlSeg = $xmlSeg;
    }

  /**
   * Split multiple messages and process
   *
   * @param  $parsed An array coming from EDI\Parser
   * @return array
   */
    public function prepare($parsed)
    {
        $msgs = $this->splitMessages($parsed);
        $groups = [];
        foreach ($msgs as $msg) {
            $grouped = $this->loopMessage($msg, $this->xmlMsg);
            $groups[] = $grouped;
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
    private function splitMessages($parsed)
    {
        $messages = [];
        $tmpmsg = [];

        foreach ($parsed as $segment) {
            switch ($segment[0]) {
                case 'UNB':
                    $tmpmsg = [];
                    break;
                case 'UNZ':
                    $messages[] = $tmpmsg;
                    break;
                default:
                    $tmpmsg[] = $segment;
                    break;
            }
        }

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
                                    for ($i = 0; $i < $elm3['maxrepeat']; $i++) {
                                        if ($message[$segmentIdx][0] == $elm3['id']) {
                                            $jsonMessage = $this->processSegment($message[$segmentIdx], $this->xmlSeg);
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
                            if (count($newGroup2) > 1) {
                                $grouptemp[$elm2['id']->__toString()] = $newGroup2;
                            } else {
                                $grouptemp[$elm2['id']->__toString()] = $newGroup2[0];
                            }
                        } else {
                            /* SEGMENT INSIDE A GROUP */
                            for ($i = 0; $i < $elm2['maxrepeat']; $i++) {
                                if ($message[$segmentIdx][0] == $elm2['id']) {
                                    $jsonMessage = $this->processSegment($message[$segmentIdx], $this->xmlSeg);
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
                if (count($newGroup) > 1) {
                    $groupedEdi[$elm['id']->__toString()] = $newGroup;
                } else {
                    $groupedEdi[$elm['id']->__toString()] = $newGroup[0];
                }
            } elseif ($elm->getName()=="segment") {
                /* FIRST LEVEL SEGMENT */
                for ($i = 0; $i < $elm['maxrepeat']; $i++) {
                    if ($message[$segmentIdx][0] == $elm['id']) {
                        $jsonMessage = $this->processSegment($message[$segmentIdx], $this->xmlSeg);
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
                        break;
                    }
                }

            } elseif ($elm->getName()=="defaults") {

            }
        }

        return $groupedEdi;
    }

  /**
   * Add human readable keys as in Analyser
   *
   * @param $segment
   */
    private function processSegment($segment)
    {
        $id = $segment[0];

        $jsonsegment = [];
        if (isset($this->xmlSeg[$id])) {

            $attributes = $this->xmlSeg[$id]['attributes'];
            $details_desc = $this->xmlSeg[$id]['details'];

            $jsonelements = ["segmentCode" => $id];
            foreach ($segment as $idx => $detail) {
                $n = $idx-1;
                if ($idx == 0 || !isset($details_desc[$n])) {
                    continue;
                }
                $d_desc_attr =  $details_desc[$n]['attributes'];

                if (!is_array($detail)) {
                    $jsonelements[$d_desc_attr['name']] = $detail;
                } else {
                    $jsoncomposite = [];
                    if (isset($details_desc[$n]['details'])) {
                        $sub_details_desc =  $details_desc[$n]['details'];

                        foreach ($detail as $d_n => $d_detail) {
                            $d_sub_desc_attr =  $sub_details_desc[$d_n]['attributes'];

                            $jsoncomposite[$d_sub_desc_attr['name']] = $d_detail;
                        }
                    }
                    $jsonelements[$d_desc_attr['name']] = $jsoncomposite;
                }
            }
            $jsonsegment['key'] = $attributes['name'];
            $jsonsegment['value'] = $jsonelements;

        } else {
            $jsonsegment['key'] = $attributes['UnrecognisedType'];
            $jsonsegment['value'] = $segment;
        }
        return $jsonsegment;
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
}
