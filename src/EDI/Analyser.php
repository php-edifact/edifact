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
			"segments" => $this->readMessageSegments($messageXml),
		];
		unset($messageXml);
		return $message;
	}

	/**
	 * read default values in given message xml
	 * @param \SimpleXmlElement $message
	 * @return array
	 */
	protected function readMessageDefaults(\SimpleXmlElement $message) {
		$defaults = array();
		$defaultsNode = isset($message->defaults[0]) ? $message->defaults[0] : array();
		/** @var \SimpleXMLElement $defaultValueNode */
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
	protected function readMessageSegments(\SimpleXmlElement $element) {
		$segments = [];
		foreach ($element as $name => $node) {
			if($name == "defaults") {
				continue;
			}
			$group = [];
			$group["type"] = $name;
			$group["attributes"] = $this->readAttributesArray($node);
			$group["details"] = $this->readMessageSegments($node);
			$segments[] = $group;
		}
		return $segments;
	}

	/**
	 * return an xml elements attributes in as array
	 * @param \SimpleXmlElement $element
	 * @return array
	 */
	protected function readAttributesArray(\SimpleXmlElement $element) {
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
		/** @var \SimpleXmlIterator $codeCollection */
		foreach ($codesXml as $codeCollection) {
			$id = (string)$codeCollection->attributes()->id;
			$codes[$id] = [];
			/** @var \SimpleXmlIterator $codeNode */
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
			$details = array();
			/** @var \SimpleXmlElement $detail */
			foreach ($segment as $type => $detail) {
				$pos ++;
				$detail_attributes = array();
				foreach ($detail->attributes() as $av => $ak) {
					$detail_attributes[$av] = (string) $ak;
				}

				$sub_details = array();
				switch ($type) {
					case 'data_element':
						break;
					case 'composite_data_element':
						/** @var \SimpleXmlElement $sub_detail */
						foreach ($detail as $sub_type => $sub_detail) {

							$sub_detail_attributes = array();
							foreach ($sub_detail->attributes() as $av => $ak) {
								$sub_detail_attributes[$av] = (string) $ak;
							}

							$sub_details[] = array(
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

				$details[$pos] = array(
					'type' => $type,
					'attributes' => $detail_attributes,
					'details' => $sub_details,
				);
			}

			$this->segments[$segment_attributes['id']] = array(
				'attributes' => $segment_attributes,
				'details' => $details,
			);

		}
	}

	/**
	 * create readable EDI MESSAGE with comments
	 * @param array $data by EDI\parser() created array from plain EDI message
	 * @return string file
	 */
	public function process($data){
		$r = array();
		foreach($data as $nrow => $segment){

			$id = $segment[0];

			$r[] = '';
			$r[] = trim($this->edi_message[$nrow]);

			if(isset($this->segments[$id])){

				$attributes = $this->segments[$id]['attributes'];
				$details_desc = $this->segments[$id]['details'];

				$r[] = $id . ' - ' . $attributes['name'];
				$r[] = '  (' . wordwrap($attributes['desc'],75,PHP_EOL.'  ') . ')';
				foreach($segment as $n => $detail){
					if($n == 0 || !isset($details_desc[$n])){
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

						foreach($detail as $d_n => $d_detail){
							$d_sub_desc_attr =  $sub_details_desc[$d_n]['attributes'];
							$r[] = '    [' . $d_n . '] ' . $d_detail;
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

							//check for skipped data
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

	/**
	 * @param string $codes_file
	 * @return array
	 * @deprecated
	 */
	public function readCodes($codes_file){
		$codes_xml = file_get_contents($codes_file);
		$xml = simplexml_load_string($codes_xml);
		unset($codes_xml);
		$json = json_encode($xml);
		unset($xml);
		return json_decode($json,TRUE);
	}

}
