##Examples

Load a message and dump a json
------------------------------
Loading from file:
```php
	use EDI\Parser;
	$fn="example.edi"; //it's a path!
	$p=new EDI\Parser($fn);
	if (count($p->errors())>0)
	{
		echo json_encode($p->errors());
		return;
	}
	echo json_encode($p->get());
```
Same example works for ```$fn``` containing a wrapped string (seg'seg) or an array ([seg,seg])

Convert a formatted array to EDIFACT message
--------------------------------------------
Loading from a php array:
```php
	use EDI\Encoder;
	$arr=[]; //array
	$p=new EDI\Encoder($arr,false); //one segment per line
	echo $p->get();
```

Demo
-------

Message from Wikipedia page http://en.wikipedia.org/wiki/EDIFACT#Example
```
UNA:+.? '
UNB+IATB:1+6XPPC+LHPPC+940101:0950+1'
UNH+1+PAORES:93:1:IA'
MSG+1:45'
IFT+3+XYZCOMPANY AVAILABILITY'
ERC+A7V:1:AMD'
IFT+3+NO MORE FLIGHTS'
ODI'
TVL+240493:1000::1220+FRA+JFK+DL+400+C'
PDI++C:3+Y::3+F::1'
APD+74C:0:::6++++++6X'
TVL+240493:1740::2030+JFK+MIA+DL+081+C'
PDI++C:4'
APD+EM2:0:1630::6+++++++DA'
UNT+13+1'
UNZ+1+1'
```

Gets converted in json as
```
[["UNB",["IATB","1"],"6XPPC","LHPPC",["940101","0950"],"1"],["UNH","1",["PAORES","93","1","IA"]],["MSG",["1","45"]],["IFT","3","XYZCOMPANY AVAILABILITY"],["ERC",["A7V","1","AMD"]],["IFT","3","NO MORE FLIGHTS"],["ODI"],["TVL",["240493","1000","","1220"],"FRA","JFK","DL","400","C"],["PDI","",["C","3"],["Y","","3"],["F","","1"]],["APD",["74C","0","","","6"],"","","","","","6X"],["TVL",["240493","1740","","2030"],"JFK","MIA","DL","081","C"],["PDI","",["C","4"]],["APD",["EM2","0","1630","","6"],"","","","","","","DA"],["UNT","13","1"],["UNZ","1","1"]]
```

Converting back the message to EDIFACT (and disabling newlines)
```
UNB+IATB:1+6XPPC+LHPPC+940101:0950+1'
UNH+1+PAORES:93:1:IA'
MSG+1:45'
IFT+3+XYZCOMPANY AVAILABILITY'
ERC+A7V:1:AMD'
IFT+3+NO MORE FLIGHTS'
ODI'
TVL+240493:1000::1220+FRA+JFK+DL+400+C'
PDI++C:3+Y::3+F::1'
APD+74C:0:::6++++++6X'
TVL+240493:1740::2030+JFK+MIA+DL+081+C'
PDI++C:4'
APD+EM2:0:1630::6+++++++DA'
UNT+13+1'
UNZ+1+1'
```
Enabling newlines (passing true to encoder)
```

UNB+IATB:1+6XPPC+LHPPC+940101:0950+1'UNH+1+PAORES:93:1:IA'MSG+1:45'IFT+3+XYZCOMPANY AVAILABILITY'ERC+A7V:1:AMD'IFT+3+NO MORE FLIGHTS'ODI'TVL+240493:1000::1220+FRA+JFK+DL+400+C'PDI++C:3+Y::3+F::1'APD+74C:0:::6++++++6X'TVL+240493:1740::2030+JFK+MIA+DL+081+C'PDI++C:4'APD+EM2:0:1630::6+++++++DA'UNT+13+1'UNZ+1+1'
```