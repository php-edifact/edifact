<?php
/*
EDIFACT Messages Reader
Uldis Nelsons

INPUT
	$c=new Reader(X);
		Where X could be:
		-an url
		-a string (wrapped message)
		-an array of strings (a segment per entry)
	or
	$c=new Parser();
	followed by parse, load and/or unwrap
	
OUTPUT
	Errors $c->errors()
	Array  $c->get()
*/

namespace EDI;

class Reader
{
	private $parsedfile;
	private $errors;

	public function __construct($url=null)
	{
        $this->load($url);
	}

	//Get errors
	function errors()
	{
		return $this->errors;
	}
	
	function load($url)
	{
        $Parser = new \EDI\Parser($url);
        $this->parsedfile = $Parser->get();
	}
	
	/**
	 * read data value from parsed EDI data
	 * 
	 * @param array/string $filter 
	 *  'AGR' - segment code 
	 *  or ['AGR',['1'=>'BB']], where AGR segment code and first element equal 'BB'
	 *  or ['AGR',['1.0'=>'BB']], where AGR segment code and first element zero subelement  equal 'BB'
	 * @param int $l1 first level item number (start by 1)
	 * @param int/false $l2 second level item number (start by 0)
	 * @return string/null
	 */
	public function readEdiDataValue($filter,$l1,$l2 = false) {

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
							if (isset($edi_row[$f_el_list[0]]) && isset($edi_row[$f_el_list[0]][$f_el_list[1]]) && $edi_row[$f_el_list[0]][$f_el_list[1]] == $el_value) {
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
			return null;
		}

		//found more one segment - error
		if ($segment_count > 1) {
			echo 'Error: Segment name "' . $segment_name . '" is ambiguous';
			exit;
		}

		//validate elements
		if (!isset($segment[$l1])) {
			return null;
		}

		//requestd first level element
		if ($l2 === false) {
			return $segment[$l1];
		}

		//requestd second level element, but not exist
		if (!isset($segment[$l1][$l2])) {
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
    public function readEdiSegmentDTM($PeriodQualifier){

        $date = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1,1);
        $format = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1,2);
        if(empty($date)){
            return $date;
        }
        switch ($format) {

            case 203: //CCYYMMDDHHMM
                return preg_replace('#(\d\d\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#','$1-$2-$3 $4:$5:00' , $date);

                break;

            default:
                return $date;
                break;
        }
    }
}