edifact
=======

Tools to process EDI messages in UN/EDIFACT format

Supported syntax is version 3.

It's provided in a Composer package:

`composer require sabas/edifact`

The mapping xml files are provided in a separate repository (https://github.com/sabas/edifact-data). To get them within the repository remember to clone with the ```--recursive``` flag, or download them with ```git submodule update --init --recursive```

EDI/Parser
------------------
Given an edi message checks the syntax, outputs errors and returns the message as a multidimensional array.

**INPUT**
```php
$c = new Parser($x);
```
Where `$x` could be:
* a url
* a string (wrapped message)
* an array of strings (a segment per entry)

OR

 ```php
$c = new Parser();
$c->load($file);
$c->loadString($string);
```

**OUTPUT**

Errors 
```php
$c->errors();
```
Array
```php
$c->get();
```
     

EDI/Encoder
------------------
Given a multidimensional array (formatted as the output of the parser), returns an EDI string, optionally one segment per line.

**INPUT**
```php
$c = new Encoder($x, $wrap = true);
```
`$x` is a multidimensional array where first dimension is the EDI segment, second contains elements:
* single value
* array (representing composite elements)

`$wrap` is a boolean, if you need a segment per line. Set to false to disable wrapping

OR
```php
$c = new Encoder();
$c->encode($array, $wrap);
```

**OUTPUT**
```php
$c->get(); // returns String
```

EDI/Analyser
------------------
Create from EDI file readable structured text with comments from `segments.xml`.

**INPUT**
```php
$analyser = new EDI\Analyser();
$analyser->loadSegmentsXml('edifact/src/EDI/Mapping/d95b/segments.xml');
$analyser->process($parsed, $rawSegments);
```
* `$url` is the path to orginal EDI message file
* `$parsed` is a by `EDI\Parser()` created EDI messages array
* `$rawSegments` (optional) is segments in raw format from `EDI\Parser::getRawSegments` to be printed before each segment in the analysed result

**OUTPUT**
```php 
$analyser->process($parsed); // returns text
```

EDI/Reader
------------------
Read from EDI file requested segment element values.

**INPUT**
```php
$r = new Reader($x);
```
Where X could be:
* a url
* a string (wrapped message)
* an array of strings (a segment per entry)

OR

```php
$r=new Reader();
$r->parse();
$r->load();
// and/or
$r->unwrap(); 
```

**OUTPUT**
Errors
```php
$c->errors();
```
Array
```php
$c->get();
```

Example
-------

**Edifact**

`DTM+7:201309200717:203'`

**Array**
```php
['DTM',['7','201309200717','203']]
```

Syntax data
----------
Processed from EDI PEAR Package by David JEAN LOUIS (izi), downloadable from [https://code.google.com/p/izi-sandbox/source/browse/trunk/php/php_edi/](IZISandbox).


Notes
------
Valid characters are: A-Za-z0-9.,-()/'+:=?!"%&*;<> [UNECE](http://www.unece.org/trade/untdid/texts/d422_d.htm#p5.1)
