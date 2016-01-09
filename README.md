edifact
=======

Tools to process EDI messages in UN/EDIFACT format

Supported syntax is version 3.

It's provided in a Composer package.

The mapping xml files are provided in a separate repository (https://github.com/sabas/edifact-data). To get them within the repository remember to clone with the ```--recursive``` flag, or download them with ```git submodule update --init --recursive```

EDI/Parser
------------------
Given an edi message checks the syntax, outputs errors and returns the message as a multidimensional array.

INPUT
    $c=new Parser(X);
        Where X could be:
        -an url
        -a string (wrapped message)
        -an array of strings (a segment per entry)
    or
    $c=new Parser();
    followed by load (for files) or loadString (for strings)

OUTPUT
    Errors $c->errors()
    Array  $c->get()

EDI/Encoder
------------------
Given a multidimensional array (formatted as the output of the parser), returns an EDI string, optionally one segment per line.
INPUT
    $c=new Encoder(X,[Y]);
        X is a multidimensional array where first dimension are edi segment, second are elements:
            - single value
            - array (representing composite elements)
        Y is a boolean, if you need a segment per line set to false to disable wrapping
    or
    $c=new Encoder();
    followed by $c->encode($array,$wrap)

OUTPUT
    String  $c->get()

EDI/Analyser
------------------
Create from EDI file readable structured text with comments from segments.xml
INPUT
    $analyser = new EDI\Analyser();
    $analyser->loadEdiMessage($url);
    $analyser->loadSegmentsXml('edifact/src/EDI/Mapping/d95b/segments.xml');
    $analyser->process($parsed);
    Where:
        $url path to edi orginal message file:
        $parsed - by EDI\parser() created EDI messgaes array

OUTPUT
$analyser->process($parsed);
    text

EDI/Reader
------------------
Read from EDI file requested segment element values
INPUT
    $r=new Reader(X);
        Where X could be:
        -an url
        -a string (wrapped message)
        -an array of strings (a segment per entry)
    or
    $r=new Reader();
    followed by parse, load and/or unwrap

OUTPUT
    Errors $c->errors()
    Array  $c->get()

Example
-------

Edifact DTM+7:201309200717:203'

Array ['DTM',['7','201309200717','203']]

Syntax data
----------
Processed from EDI PEAR Package by David JEAN LOUIS (izi), downloadable from [https://code.google.com/p/izi-sandbox/source/browse/trunk/php/php_edi/](IZISandbox).


Notes
------
Valid characters are: A-Za-z0-9.,-()/'+:=?!"%&*;<> [UNECE](http://www.unece.org/trade/untdid/texts/d422_d.htm#p5.1)
