<?php

/* MERGE ELEMENTS */

$xml=simplexml_load_file("segments.xml");
$data_elm=simplexml_load_file("data_elements.xml");
$compdata_elm=simplexml_load_file("composite_data_elements.xml");

foreach ($xml->segment as $seg)
{
	foreach($seg->children() as $child)
	{
		if($child->getName()=="composite_data_element")
		{
		$result = $compdata_elm->xpath('*[@id="'.$child["id"].'"]');
			//var_dump($result[0]);
		foreach ($result[0]->attributes() as $k => $v)
		{
		if($k=="id")continue;
		$child->addAttribute($k,$v);
		}
		foreach ($result[0]->children() as $orphan)
		{
		xml_adopt($child,$orphan);
		}

		}
	}
}

foreach ($xml->segment as $seg)
{
	foreach($seg->children() as $child)
	{
		if($child->getName()=="data_element")
		{
		$result = $data_elm->xpath('*[@id="'.$child["id"].'"]');
			//var_dump($result[0]);
		foreach ($result[0]->attributes() as $k => $v)
		{
		if($k=="id")continue;
		$child->addAttribute($k,$v);
		}
		foreach ($result[0]->children() as $orphan)
		{
		xml_adopt($child,$orphan);
		}

		}
		if($child->getName()=="composite_data_element")
		{
		foreach($child->children() as $child2)
		{
		if($child2->getName()=="data_element")
		{
		$result = $data_elm->xpath('*[@id="'.$child2["id"].'"]');
			//var_dump($result[0]);
		foreach ($result[0]->attributes() as $k => $v)
		{
		if($k=="id")continue;
		$child2->addAttribute($k,$v);
		}
		}
		}

		}
	}
}


//var_dump($child);
$xml->asXml("_segments.xml");
//var_dump($data_elm->data_elements); data_elements/data_element[@id=9019]
function xml_adopt($root, $new, $namespace = null) {
    // first add the new node
    $node = $root->addChild($new->getName(), (string) $new, $namespace);
    // add any attributes for the new node
    foreach($new->attributes() as $attr => $value) {
        $node->addAttribute($attr, $value);
    }
    // get all namespaces, include a blank one
    $namespaces = array_merge(array(null), $new->getNameSpaces(true));
    // add any child nodes, including optional namespace
    foreach($namespaces as $space) {
      foreach ($new->children($space) as $child) {
        xml_adopt($node, $child, $space);
      }
    }
}
?>