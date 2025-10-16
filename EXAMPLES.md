##Examples

Load a message and dump a json
------------------------------
Loading from file:
```php
use EDI\Parser;
$filePath = "example.edi";
$p = new EDI\Parser();
$p->load($filePath)->parse();
$p->checkEncoding(); // optional
if (count($p->errors()) > 0) {
	echo json_encode($p->errors());
	return;
}
echo json_encode($p->get());
```
To load a single-line string (`"seg'seg"`) use `$p->loadString()`.   
To load an array of lines (`["seg","seg"]`) use `$p->loadArray()`.

Convert a formatted array to EDIFACT message
--------------------------------------------
Loading from a PHP array:
```php
use EDI\Encoder;
$arr = []; //array
$enc = new EDI\Encoder($arr, false); //one segment per line
echo $enc->get();
```

Create human-readable file with comments from EDI file
------------------------------------------------------

```php
$filePath = 'demo.edi';
$parser = new EDI\Parser();
$parser->load($filePath);
$segments = $parser->getRawSegments();

$analyser = new EDI\Analyser();
$analyser->loadSegmentsXml('edifact/src/EDI/Mapping/d95b/segments.xml');

$text = $analyser->process($parsed, $parser->get());
```

EDI data reading from extracted group
-------------------------------------

As not to have to go through the indexes for extracted groups, just use a reader with a different parser.

E.g. inventory messages (snippet, not a valid EDI message!):

```
INV+2++1'QTY+156:1000:PCE'QTY+145:3000:PCE'LOC+18+YA:::567'DTM+179:20180509:102'RFF+AAK:TEST'DTM+171:20180509:102'
INV+1++11'QTY+156:200:PCE'QTY+145:2800:PCE'LOC+18+YA:::567'DTM+179:20180509:102'RFF+ALO:4916165350'DTM+171:20180509:102'
INV+1++11'QTY+156:200:PCE'QTY+145:2600:PCE'LOC+18+YA:::567'DTM+179:20180509:102'RFF+ALO:4916165351'DTM+171:20180509:102'
INV+1++11'QTY+156:200:PCE'QTY+145:2400:PCE'LOC+18+YA:::567'DTM+179:20180509:102'RFF+ALO:4916165352'DTM+171:20180509:102'
INV+1++11'QTY+156:100:PCE'QTY+145:2300:PCE'LOC+18+YA:::567'DTM+179:20180510:102'RFF+ALO:4916165359'DTM+171:20180510:102'
```

```php
$parser = new EDI\Parser();
$parser->load($filePath);
$reader = new EDI\Reader($parser);
$groups = $reader->groupsExtract('INV');

foreach ($groups as $record) {
    $parser->loadArray($record, false);
    $r = new EDI\Reader($parser);
    $records[] = [
        'storageLocation' => $r->readEdiDataValue(['LOC', ['2.0' => 'YA']], 2, 3),
        'bookingDate' => $r->readEdiSegmentDTM(179),
        'enteredOn' => $r->readEdiSegmentDTM(171),
        'quantity' => $r->readEdiDataValue(['QTY', ['1.0' => 156]], 1, 1),
        'actualStock' => $r->readEdiDataValue(['QTY', ['1.0' => 145]], 1, 1)
    ];
}
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
------------------------

```php
$filePath = 'files/truck_out_176699.edi';
$parser = new EDI\Parser();
$parser->load($filePath);
$reader = new EDI\Reader($parser);

$record = [
	'interchangeSender' => $reader->readEdiDataValue('UNB', 2),
	'arrivalDateTimeEstimated' => $reader->$EdiReader->readEdiSegmentDTM('132'),
	'messageReferenceNumber' => $reader->readEdiDataValue('UNH', 1),
	'TareWeight' => $reader->readEdiDataValue(['MEA', ['2' => 'T']], 3, 0)
	. ' '
	. $reader->readEdiDataValue(['MEA', ['2' => 'T']], 3, 1),
	'GrossWeight' => $reader->readEdiDataValue(['MEA', ['2' => 'G']], 3, 0)
	. ' '
	. $reader->readEdiDataValue(['MEA', ['2' => 'G']], 3, 1),
];

//error processing
$readerErrors = $EdiReader->errors();
if (!empty($readerErrors)) {
	var_dump($readerErrors);
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
