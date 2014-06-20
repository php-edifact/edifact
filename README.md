edifact
=======

Tools to process EDI messages in UN/EDIFACT format

Supported syntax is version 3.

It's provided in a Composer package.

EDI/Parser
------------------
Given an edi message checks the syntax, outputs errors and returns the message as a multidimensional array.

Syntax data
----------
Comes from [https://code.google.com/p/izi-sandbox/source/browse/trunk/php/php_edi/](IZISandbox).


Notes
------
Valid characters are: A-Za-z0-9.,-()/'+:=?!"%&*;<> [UNECE](http://www.unece.org/trade/untdid/texts/d422_d.htm#p5.1)