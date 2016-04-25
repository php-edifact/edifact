<?php
/**
EDIFACT Messages Reader
(c)2016 Uldis Nelsons
*/

namespace EDI;

class Reader
{
    /**
     * @var array parsed EDI file
     */
    private $parsedfile;

    /**
     * @var array
     */
    private $errors = [];

    /**
     * Reader constructor.
     * @param string $url url or path ur EDI message
     */
    public function __construct($url = null)
    {
        $this->errors=[];
        $this->load($url);
    }

    /**
     * Get errors
     */
    public function errors()
    {
        return $this->errors;
    }

    /**
     * reset errors
     */
    public function resetErrors()
    {
        $this->errors = array();
    }

    /**
     * Returns the parsed file contained within.
     * @returns array
     */
    public function getParsedFile()
    {
        return $this->parsedfile;
    }

    /**
     * @param $url string url to edi file, path to edi file or EDI message
     * @return bool
     */
    public function load($url)
    {
        $Parser = new \EDI\Parser($url);
        $this->parsedfile = $Parser->get();
        return $this->preValidate();
    }

    /**
     * @param $parsed_file array
     * @return bool
     */
    public function setParsedFile($parsed_file)
    {
        $this->parsedfile = $parsed_file;
        return $this->preValidate();
    }

    /**
     * Do initial validation
     * @return bool
     */
    public function preValidate(){
        $this->errors=[];
        
        if(!is_array($this->parsedfile)){
            $this->errors[] = 'Incorect format parsed file';
            return false;            
        }
        
        $r = $this->readUNHmessageNumber();
        if(!$r 
                && isset($this->errors[0]) 
                && $this->errors[0] == 'Segment "UNH" is ambiguous'){
            $this->errors=[];
            $this->errors[] = 'File has multiple messages';
            return false;
        }

        return true;
    }

    /**
     * Split multi messages to separate messages
     * @param $ediMessage string
     * @return array
     */
    public static function splitMultiMessage($ediMessage){
        $splicedMessages = [];
        $rawSegments = self::unwrap($ediMessage);
        //var_dump($rawSegments);
        $message = [];
        $unb = false;
        foreach($rawSegments as $segment){

            if(substr($segment,0,3) == 'UNB'){
                $unb = $segment;
                continue;
            }

            if(substr($segment,0,3) == 'UNH'){
                if($unb) {
                    $message[] = $unb;
                }
                $message[] = $segment;
                continue;
            }

            if(substr($segment,0,3) == 'UNT'){
                $message[] = $segment;
                $splicedMessages[] = $message;
                $message = [];
                continue;
            }

            if($message){
                $message[] = $segment;
                continue;
            }

        }

        if(substr($segment,0,3) == 'UNZ'){
            $segment = preg_replace('#UNZ\+\d+\+#', 'UNZ+1+',$segment);
            foreach($splicedMessages as $k => $message){
                $splicedMessages[$k][] = $segment;
            }
        }

        foreach($splicedMessages as $k => $message) {
            $splicedMessages[$k] = implode(PHP_EOL, $splicedMessages[$k]);
        }

        return $splicedMessages;
    }

    /**
     * unwrap string splitting rows on terminator (if not escaped)
     *
     * @param $string string
     * @return array
     */
    private static function unwrap($string)
    {
        $file2=array();
        $file=preg_split("/(?<!\?)'/i", $string);
        foreach ($file as &$line) {
            $line = preg_replace('#[\x00\r\n]#', '', $line);
            $temp=$line."'";
            if ($temp!="'") {
                $file2[]=$temp;
            }
        }
        return $file2;
    }

    /**
     * read required value. if no found, registre error
     *
     * @param $filter string|array segment filter by segment name and values
     * @param $l1
     * @param bool $l2
     * @return string
     */
    public function readEdiDataValueReq($filter, $l1, $l2 = false)
    {
        return $this->readEdiDataValue($filter, $l1, $l2, true);
    }

    /**
     * read data value from parsed EDI data
     *
     * @param  array/string $filter 'AGR' - segment code
     *                              or ['AGR',['1'=>'BB']], where AGR segment code and first element equal 'BB'
     *                              or ['AGR',['1.0'=>'BB']], where AGR segment code and first element zero subelement  equal 'BB'
     * @param  int     $l1          first level item number (start by 1)
     * @param  int     $l2/false    second level item number (start by 0)
     * @param  bool    $required    if required, but no exist, register error
     * @return string/null
     */
    public function readEdiDataValue($filter, $l1, $l2 = false, $required = false)
    {

        //interpret filter arameters
        if (!is_array($filter)) {
            $segment_name = $filter;
            $filter_elements = false;
        } else {
            $segment_name = $filter[0];
            $filter_elements = $filter[1];
        }

        $segment = false;
        $segment_count = 0;

        //search segment, who conform to filter
        foreach ($this->parsedfile as $edi_row) {
            if ($edi_row[0] == $segment_name) {
                if ($filter_elements) {
                    $filter_ok = false;
                    foreach ($filter_elements as $el_id => $el_value) {
                        $f_el_list = explode('.', $el_id);
                        if (count($f_el_list) == 1) {
                            if (isset($edi_row[$el_id]) && $edi_row[$el_id] == $el_value) {
                                $filter_ok = true;
                                break;
                            }
                        } else {
                            if (isset($edi_row[$f_el_list[0]]) && isset($edi_row[$f_el_list[0]][$f_el_list[1]])
                                && $edi_row[$f_el_list[0]][$f_el_list[1]] == $el_value) {
                                $filter_ok = true;
                                break;
                            }
                        }
                    }
                    if ($filter_ok === false) {
                        continue;
                    }
                }
                $segment = $edi_row;
                $segment_count ++;
            }
        }

        //no found segment
        if (!$segment) {
            if ($required) {
                $this->errors[] = 'Segment "' . $segment_name . '" no exist';
            }
            return null;
        }

        //found more one segment - error
        if ($segment_count > 1) {

            $this->errors[] = 'Segment "' . $segment_name . '" is ambiguous';
            return null;
        }

        //validate elements
        if (!isset($segment[$l1])) {
            if ($required) {
                $this->errors[] = 'Segment value "' . $segment_name . '['.$l1.']" no exist';
            }
            return null;
        }

        //requestd first level element
        if ($l2 === false) {
            return $segment[$l1];
        }

        //requestd second level element, but not exist
        if (!is_array($segment[$l1]) || !isset($segment[$l1][$l2])) {
            if ($required) {
                $this->errors[] = 'Segment value "' . $segment_name . '['.$l1.']['.$l2.']" no exist';
            }
            return null;
        }

        //second level element
        return $segment[$l1][$l2];
    }


    /**
     * read date from DTM segment period qualifier - codelist 2005
     * @param int $PeriodQualifier period qualifier (codelist/2005)
     * @return string YYYY-MM-DD HH:MM:SS
     */
    public function readEdiSegmentDTM($PeriodQualifier)
    {

        $date = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1, 1);
        $format = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1, 2);
        if (empty($date)) {
            return $date;
        }
        switch ($format) {

            case 203: //CCYYMMDDHHMM
                return preg_replace('#(\d\d\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '$1-$2-$3 $4:$5:00', $date);
                break;

            case 102: //CCYYMMDD
                return preg_replace('/(\d{4})(\d{2})(\d{2})/', '$1-$2-$3', $date);
                break;

            default:
                return $date;
                break;
        }
    }

    /**
     * get message preparation time
     *
     * @return mixed|string
     */
    public function readUNBDateTimeOfPpreperation()
    {

        //separate date (YYMMDD) and time (HHMM)
        $date = $this->readEdiDataValue('UNB', 4, 0);
        if (!empty($date)) {
            $time = $this->readEdiDataValue('UNB', 4, 1);
            $datetime = preg_replace('#(\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '20$1-$2-$3 $4:$5:00', $date.$time);
            return $datetime;
        }

        //common YYYYMMDDHHMM
        $datetime = $this->readEdiDataValue('UNB', 4);
        $datetime = preg_replace('#(\d\d\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '$1-$2-$3 $4:$5:00', $datetime);

        return $datetime;
    }

    /**
     * read transport identification number
     *
     * @param $transportStageQualifier
     * @return string
     */
    public function readTDTtransportIdentification($transportStageQualifier)
    {

        $transportIdentification = $this->readEdiDataValue(['TDT', ['1' => $transportStageQualifier]], 8, 0);
        if (!empty($transportIdentification)) {
            return $transportIdentification;
        }

        return $this->readEdiDataValue(['TDT', ['1' => $transportStageQualifier]], 8);

    }

    /**
     * read message type
     *
     * @return string
     */
    public function readUNHmessageType()
    {
        return $this->readEdiDataValue('UNH', 2, 0);
    }


    /**
     * read message number
     *
     * @return string
     */
    public function readUNHmessageNumber()
    {
        return $this->readEdiDataValue('UNH', 1);
    }

    /**
     * get groups from message
     * @param char $before segment before groups
     * @param type $start  first segment of group
     * @param type $end    last segment of group
     * @param type $after  segment after groups
     * @return boolean/array
     */
    public function readGroups($before, $start, $end, $after)
    {
        $groups = [];
        $group = [];
        $position = 'before_search';
        foreach ($this->parsedfile as $edi_row) {
            //echo $edi_row[0].' '.$position.PHP_EOL;

            //search before group segment
            if ($position == 'before_search' && $edi_row[0] == $before) {
                $position = 'before_is';
                continue;
            }

            if ($position == 'before_search') {
                continue;
            }

            if ($position == 'before_is' && $edi_row[0] == $before) {
                continue;
            }

            //after before search start
            if ($position == 'before_is' && $edi_row[0] == $start) {
                $position = 'group_is';
                $group[] = $edi_row;
                continue;
            }

            //if after before segment no start segment, search again before segment
            if ($position == 'before_is') {
                $position = 'before_search';
                continue;
            }

            //get group element
            if ($position == 'group_is' && $edi_row[0] != $end) {
                $group[] = $edi_row;
                continue;
            }

            //found end of group
            if ($position == 'group_is' && $edi_row[0] == $end) {
                $position = 'group_finish';
                $group[] = $edi_row;
                $groups[] = $group;
                $group = [];
                continue;
            }

            //next group start
            if ($position == 'group_finish' && $edi_row[0] == $start) {
                $group[] = $edi_row;
                $position = 'group_is';
                continue;
            }

            //finish
            if ($position == 'group_finish' && $edi_row[0] == $after) {
                break;
            }

            $this->errors[] = 'Reading group ' . $before.'/'.$start.'/'.$end.'/'.$after
                    .'. Error on position: ' . $position;
            return false;

        }

        return $groups;
    }
}
