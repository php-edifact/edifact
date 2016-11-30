edifact
=======

Tools to process EDI messages in UN/EDIFACT format

Supported syntax is version 3.

It's provided in a Composer package:

`composer require sabas/edifact`

The mapping xml files are provided in a separate package:

`composer require php-edifact/edifact-mapping`

EDI\Parser
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


EDI\Encoder
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

EDI\Analyser
------------------
Create from EDI file readable structured text with comments from `segments.xml`.
Requires the EDI\Mapping package.

**INPUT**
```php
$mapping = new EDI\Mapping\MappingProvider('D95B');
$analyser = new EDI\Analyser();
$analyser->loadMessageXml($mapping->getMessage('CODECO'));
$analyser->loadSegmentsXml($mapping->getSegments());
```
* `$url` is the path to orginal EDI message file
* `$parsed` is an EDI message array created by `EDI\Parser()`

**TEXT OUTPUT**
```php
$analyser->process($parsed); // returns text
```
Or
```php
$analyser->process($parsed, $rawSegments);
```
* `$rawSegments` (optional) contains the segments in raw format from `EDI\Parser::getRawSegments()` to be printed before each segment in the analysed result

**JSON OUTPUT**
Get a json representation of the array, with the element names as key.
```php
$analyser->process($parsed);
$json = $analyser->getJson();
```

EDI\Reader
------------------
Read from EDI file requested segment element values.

**INPUT**
```php
$r = new Reader($x);
$sender = $r->readEdiDataValue('UNB', 2);
$Dt = $r->readUNBDateTimeOfPreperation();

```
Where X could be:
* a url
* a string (wrapped message)
* an array of strings (a segment per entry)

OR

```php
$c = new Parser($x);

$r = new Reader();
$r->setParsedFile($c->get());
$sender = $r->readEdiDataValue('UNB', 2);
$Dt = $r->readUNBDateTimeOfPreperation();
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

EDI\Interpreter
---------------
Organizes the data parsed by EDI/Parser using the xml description of the message and the xml segments.

**INPUT**
```php
$p = new EDI\Parser($edifile);
$edi = $p->get();

$mapping = new EDI\Mapping\MappingProvider('D95B');

$analyser = new EDI\Analyser();
$segs = $analyser->loadSegmentsXml($mapping->getSegments());
$svc = $analyser->loadSegmentsXml($mapping->getServiceSegments(3));

$interpreter = new EDI\Interpreter($mapping->getMessage('CODECO'), $segs, $svc);
$prep = $interpreter->prepare($edi);
```

**OUTPUT**

Json
```php
$interpreter->getJson()
```

Json for interchange service segments (UNB / UNZ)
```php
$interpreter->getJsonServiceSegments()
```

Errors (per message)
```php
$interpreter->getErrors()
```

Example
-------

**Edifact**

`DTM+7:201309200717:203'`

**Array**
```php
['DTM',['7','201309200717','203']]
```

Testing
-------
The package should be required with composer, alongside edifact-mapping. The tests then can be run simply with phpunit in the root of the package.

Notes
------
Valid characters are: A-Za-z0-9.,-()/'+:=?!"%&*;<> [UNECE](http://www.unece.org/trade/untdid/texts/d422_d.htm#p5.1)
