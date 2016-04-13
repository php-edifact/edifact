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

Create from EDI file readable file with comments
------------------------------------------------

```php
    $file_name = 'demo.edi';
    $parser = new EDI\Parser();
    $parsed = $parser->load($file_name);
    $segments = $parser->getRawSegments();

    $analyser = new EDI\Analyser();
    $analyser->loadSegmentsXml('edifact/src/EDI/Mapping/d95b/segments.xml'); 
    
    $text = $analyser->process($parsed, $segments);

```

Readable EDI file
-----------------
```
UNB+UNOE:2+RIXCT++141028:0746+NBFILE027747'
```

```
UNB - InterchangeHeader
  (To start, identify and specify an interchange)
  [1] UNOE,2
      unb1 - syntaxIdentifier
      Syntax identifier
    [0] UNOE
        id: unb11 - syntaxIdentifier
        Syntax identifier
        type: a
        required: true
        length: 4
    [1] 2
        id: unb12 - syntaxVersionNumber
        Syntax version number
        type: n
        required: true
        length: 1
  [2] RIXCT
      unb2 - interchangeSender
      Interchange sender
  [3] 
      unb3 - interchangeRecipient
      Interchange recipient
  [4] 141028,0746
      unb4 - dateTimePreparation
      Date Time of preparation
    [0] 141028
        id: unb41 - date
        type: n
        required: true
        length: 6
    [1] 0746
        id: unb42 - time
        type: n
        required: true
        length: 4
  [5] NBFILE027747
      unb5 - interchangeControlReference
```

EDI data element reading
-----------------

```php
    $file_name = 'files/truck_out_176699.edi';
    $reader = new EDI\Reader($file_name);

    $record = array(
            'interchangeSender' => $reader->readEdiDataValue('UNB',2),
            'arrivalDateTimeEstimated' => $reader->$EdiReader->readEdiSegmentDTM('132'),
            'messageReferenceNumber' => $reader->readEdiDataValue('UNH',1),
            'TareWeight' => $reader->readEdiDataValue(['MEA',['2'=>'T']],3,0) 
                                . ' ' 
                                . $reader->readEdiDataValue(['MEA',['2'=>'T']],3,1),
            'GrossWeight' => $reader->readEdiDataValue(['MEA',['2'=>'G']],3,0) 
                                . ' ' 
                                . $reader->readEdiDataValue(['MEA',['2'=>'G']],3,1),
    );

    //error processing
    $reader_errors = $EdiReader->errors();
    if(!empty($reader_errors)){
        var_dump($reader_errors);
    }  
    var_dump($record);
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

Converting back the message to EDIFACT (and enabling newlines)
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
Disabling newlines (passing true to encoder)
```

UNB+IATB:1+6XPPC+LHPPC+940101:0950+1'UNH+1+PAORES:93:1:IA'MSG+1:45'IFT+3+XYZCOMPANY AVAILABILITY'ERC+A7V:1:AMD'IFT+3+NO MORE FLIGHTS'ODI'TVL+240493:1000::1220+FRA+JFK+DL+400+C'PDI++C:3+Y::3+F::1'APD+74C:0:::6++++++6X'TVL+240493:1740::2030+JFK+MIA+DL+081+C'PDI++C:4'APD+EM2:0:1630::6+++++++DA'UNT+13+1'UNZ+1+1'
```
