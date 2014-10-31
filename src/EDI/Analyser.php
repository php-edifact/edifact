<?php
/*
EDIFACT Messages Parser
Uldis Nelsons

INPUT
    $analyser = new EDI\Analyser();
    $analyser->load_edi_message($ulr);
    $analyser->loadSegmentsXml('edifact/src/EDI/Mapping/d95b/segments.xml'); 
    $analyser->process($parsed);
    Where:
        $url path to edi orginal message file:
        $parsed - by EDI\parser() created EDI messgaes array
	
OUTPUT
$analyser->process($parsed);
	text 
*/
namespace EDI;

class Analyser {

    public $segments;
    public $edi_message;

    public function load_edi_message($url){
		$this->edi_message=file($url);        
    }
    
    /**
     * convert segment definiton from XML to array. Sequence of data_elements and 
     * composite_data_element same as in XML
     * @param char $segment_xml_file
     */
    public function loadSegmentsXml($segment_xml_file) {

        $segments_xml = file_get_contents($segment_xml_file);

        $xml = simplexml_load_string($segments_xml);
        unset($segments_xml);
        $this->segments = array();
        foreach ($xml->segment as $sk => $segment) {

            $segment_attributes = array();
            foreach ($segment->attributes() as $av => $ak) {
                $segment_attributes[$av] = (string) $ak;
            }

            $pos = 0;
            $deatils = array();
            foreach ($segment as $type => $detail) {
                $pos ++;
                $detail_attributes = array();
                foreach ($detail->attributes() as $av => $ak) {
                    $detail_attributes[$av] = (string) $ak;
                }

                switch ($type) {
                    case 'data_element':
                        break;
                    case 'composite_data_element':
                        $sub_deatils = array();
                        foreach ($detail as $sub_type => $sub_detail) {

                            $sub_detail_attributes = array();
                            foreach ($sub_detail->attributes() as $av => $ak) {
                                $sub_detail_attributes[$av] = (string) $ak;
                            }

                            $sub_deatils[] = array(
                                'type' => $sub_type,
                                'attributes' => $sub_detail_attributes,
                            );

                            if ($sub_type != 'data_element') {
                                echo '  sub_type=' . $sub_type . PHP_EOL;
                            }
                        }


                        break;

                    default:
                        echo '  type=' . $type . PHP_EOL;
                        break;
                }


                $deatils[$pos] = array(
                    'type' => $type,
                    'attributes' => $detail_attributes,
                    'details' => $sub_deatils,
                );
            }

            $this->segments[$segment_attributes['id']] = array(
                'attributes' => $segment_attributes,
                'deatils' => $deatils,
            );

        }
    }
    
    /**
     * create readble EDI MESSAGE with comments
     * @param array $data by EDI\parser() created array from plain EDI message
     * @return text file
     */
    public function process($data){
        $r = array();
        foreach($data as $nrow => $segment){

            $id = $segment[0];

            $r[] = '';            
            $r[] = trim($this->edi_message[$nrow]);            
            
            if(isset($this->segments[$id])){
                
                $attributes = $this->segments[$id]['attributes'];
                $details_desc = $this->segments[$id]['deatils'];


                $r[] = $id . ' - ' . $attributes['name'];
                $r[] = '  (' . wordwrap($attributes['desc'],75,PHP_EOL.'  ') . ')';
                foreach($segment as $n => $detail){
                    if($n == 0){
                        continue;
                    }
                    $d_desc_attr =  $details_desc[$n]['attributes'];                    
                    $l1 = '      ' . $d_desc_attr['id'] . ' - ' . $d_desc_attr['name'];
                    $l2 = '      ' . wordwrap($d_desc_attr['desc'],71,PHP_EOL.'      ');
                    
                    if(!is_array($detail)){
                        $r[] = '  [' . $n . '] ' . $detail;
                        $r[] = $l1;
                        $r[] = $l2;
                    }else{
                        $r[] = '  [' . $n . '] ' . implode(',',$detail);
                        $r[] = $l1;
                        $r[] = $l2;
                        $sub_details_desc =  $details_desc[$n]['details'];  
                        //var_dump($sub_details_desc);
                        foreach($detail as $d_n => $d_detail){
                            $d_sub_desc_attr =  $sub_details_desc[$d_n]['attributes'];                    
                            $r[] = '    [' . $n . '][' . $d_n . '] ' . $d_detail;
                            $r[] = '        id: ' . $d_sub_desc_attr['id'] . ' - ' . $d_sub_desc_attr['name'];
                            $r[] = '        ' . wordwrap($d_sub_desc_attr['desc'],69,PHP_EOL.'        ');
                            $r[] = '        type: ' . $d_sub_desc_attr['type'];
                            if(isset($d_sub_desc_attr['maxlength'])){
                                $r[] = '        maxlen: ' . $d_sub_desc_attr['maxlength'];
                            }
                            if(isset($d_sub_desc_attr['required'])){
                                $r[] = '        required: ' . $d_sub_desc_attr['required'];
                            }
                            if(isset($d_sub_desc_attr['length'])){
                                $r[] = '        length: ' . $d_sub_desc_attr['length'];
                            }

                            //check for skiped data
                            unset($d_sub_desc_attr['id']);
                            unset($d_sub_desc_attr['name']);
                            unset($d_sub_desc_attr['desc']);
                            unset($d_sub_desc_attr['type']);
                            unset($d_sub_desc_attr['maxlength']);
                            unset($d_sub_desc_attr['required']);
                            unset($d_sub_desc_attr['length']);
                            if(!empty($d_sub_desc_attr)){
                                var_dump($d_sub_desc_attr);
                            }

                        }
                        //exit;
                    }
                    
                }
            }else{
                 $r[] = $id;
            }
            
        }
        
        return implode(PHP_EOL,$r);
    }

}
