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

```php
        $parser = new Parser($file);
        $parsed = $parser->get();
        $segments = $parser->getRawSegments();
        $analyser = new Analyser();
        $mapping = new MappingProvider('D95B');
        $analyser->loadSegmentsXml($mapping->getSegments());
        $analyser->loadMessageXml($mapping->getMessage('coparn'));
        $analyser->loadCodesXml($mapping->getCodes());
        $analyser->directory = 'D95B';
        $result = $analyser->process($parsed, $segments);                   

```
* `$file` is the path to orginal EDI message file

*** Example INPUT 
```text
UNA:+,? '
UNB+UNOA:1+MAEU+LVRIXBCT+200813:0816+1412605'
UNH+141260500001+COPARN:D:95B:UN'
BGM+12+20200813081626+9'
RFF+BN:204549739'
NAD+CA+MAE:172:20'
EQD+CN++45G1:102:5+2+2+4'
RFF+BN:204549739'
RFF+SQ:7G3JTL39O0M3B'
TMD+++2'
DTM+201:202008130000:203'
LOC+98+LVRIX:139:6+RIGA TERMINAL:TER:ZZZ'
CNT+16:1'
UNT+12+141260500001'
UNZ+1+1412605'
```

*** Example Output 
```text

UNA:+,? '
UNB - InterchangeHeader
  (To start, identify and specify an interchange)
  [0] UNOA,1
      unb1 - syntaxIdentifier
      Syntax identifier
    [0] UNOA
        id: unb11 - syntaxIdentifier
        Syntax identifier
        type: a
        required: true
        length: 4
    [1] 1
        id: unb12 - syntaxVersionNumber
        Syntax version number
        type: n
        required: true
        length: 1
  [1] MAEU
      unb2 - interchangeSender
      Interchange sender
  [2] LVRIXBCT
      unb3 - interchangeRecipient
      Interchange recipient
  [3] 200813,0816
      unb4 - dateTimePreparation
      Date Time of preparation
    [0] 200813
        id: unb41 - date
        
        type: n
        required: true
        length: 6
    [1] 0816
        id: unb42 - time
        
        type: n
        required: true
        length: 4
  [4] 1412605
      unb5 - interchangeControlReference
      

UNB+UNOA:1+MAEU+LVRIXBCT+200813:0816+1412605'
UNH - messageHeader http://www.unece.org/trade/untdid/d95b/trsd/trsdunh.htm
  (To head, identify and specify a message.)
  [0] 141260500001
      unh1 - messageReferenceNumber
      
  [1] COPARN,D,95B,UN
      unh2 - messageType
      
    [0] COPARN
        id: unh21 - messageType
        
        type: an
        maxlen: 6
        required: true
    [1] D
        id: unh22 - messageVersion
        
        type: an
        maxlen: 3
        required: true
    [2] 95B
        id: unh23 - messageRelease
        
        type: an
        maxlen: 3
        required: true
    [3] UN
        id: unh24 - controllingAgency
        
        type: an
        maxlen: 3
        required: true

UNH+141260500001+COPARN:D:95B:UN'
BGM - beginningOfMessage http://www.unece.org/trade/untdid/d95b/trsd/trsdbgm.htm
  (To indicate the type and function of a message and to transmit the
  identifying number.)
  [0] 12
      C002 - documentmessageName
      Identification of a type of document/message by code or name. Code
      preferred.
  [1] 20200813081626
      1004 - documentmessageNumber
      Reference number assigned to the document/message by the issuer.
  [2] 9
      1225 - messageFunctionCoded
      Code indicating the function of the message.

BGM+12+20200813081626+9'
RFF - reference http://www.unece.org/trade/untdid/d95b/trsd/trsdrff.htm
  (To specify a reference.)
  [0] BN,204549739
      C506 - reference
      Identification of a reference.
    [0] BN - Booking reference number
        id: 1153 - referenceQualifier
        Code giving specific meaning to a reference segment or a reference
        number.
        type: an
        maxlen: 3
        required: true
    [1] 204549739
        id: 1154 - referenceNumber
        Identification number the nature and function of which can be
        qualified by an entry in data element 1153 Reference qualifier.
        type: an
        maxlen: 35

RFF+BN:204549739'
NAD - nameAndAddress http://www.unece.org/trade/untdid/d95b/trsd/trsdnad.htm
  (To specify the name/address and their related function, either by CO82 only
  and/or unstructured by CO58 or structured by CO80 thru 3207. be permitted
  to use the ADR segment and/or the PNA segment.  After the conclusion of the
  Brazil JRT (scheduled for April 1996), this NAD segment shall NO LONGER BE
  PERMITTED FOR USE IN ANY NEW MESSAGES submitted for Status 1 in the
  UN/EDIFACT Directories. This means that either the ADR and/or the PNA
  segments shall be used in place of this NAD segment by the message
  designers. (See Rapporteurs' decision on the proposed ADR & PNA segments
  and the existing NAD segment - Sydney, April 1995).)
  [0] CA
      3035 - partyQualifier
      Code giving specific meaning to a party.
  [1] MAE,172,20
      C082 - partyIdentificationDetails
      Identification of a transaction party by code.
    [0] MAE
        id: 3039 - partyIdIdentification
        Code identifying a party involved in a transaction.
        type: an
        maxlen: 35
        required: true
    [1] 172 - Carrier code
        id: 1131 - codeListQualifier
        Identification of a code list.
        type: an
        maxlen: 3
    [2] 20 - BIC (Bureau International des Containeurs)
        id: 3055 - codeListResponsibleAgencyCoded
        Code identifying the agency responsible for a code list.
        type: an
        maxlen: 3

NAD+CA+MAE:172:20'
EQD - equipmentDetails http://www.unece.org/trade/untdid/d95b/trsd/trsdeqd.htm
  (To identify a unit of equipment.)
  [0] CN
      8053 - equipmentQualifier
      Code identifying type of equipment.
  [1] 
      C237 - equipmentIdentification
      Marks (letters and/or numbers) identifying equipment used for transport
      such as a container.
  [2] 45G1,102,5
      C224 - equipmentSizeAndType
      Code and/or name identifying size and type of equipment used in
      transport. Code preferred.
    [0] 45G1
        id: 8155 - equipmentSizeAndTypeIdentification
        Coded description of the size and type of equipment e.g. unit load
        device.
        type: an
        maxlen: 10
    [1] 102 - Size and type
        id: 1131 - codeListQualifier
        Identification of a code list.
        type: an
        maxlen: 3
    [2] 5 - ISO (International Organization for Standardization)
        id: 3055 - codeListResponsibleAgencyCoded
        Code identifying the agency responsible for a code list.
        type: an
        maxlen: 3
  [3] 2
      8077 - equipmentSupplierCoded
      To indicate the party that is the supplier of the equipment.
  [4] 2
      8249 - equipmentStatusCoded
      Indication of the action related to the equipment.
  [5] 4
      8169 - fullemptyIndicatorCoded
      To indicate the extent to which the equipment is full or empty.

EQD+CN++45G1:102:5+2+2+4'
RFF - reference http://www.unece.org/trade/untdid/d95b/trsd/trsdrff.htm
  (To specify a reference.)
  [0] BN,204549739
      C506 - reference
      Identification of a reference.
    [0] BN - Booking reference number
        id: 1153 - referenceQualifier
        Code giving specific meaning to a reference segment or a reference
        number.
        type: an
        maxlen: 3
        required: true
    [1] 204549739
        id: 1154 - referenceNumber
        Identification number the nature and function of which can be
        qualified by an entry in data element 1153 Reference qualifier.
        type: an
        maxlen: 35

RFF+BN:204549739'
RFF - reference http://www.unece.org/trade/untdid/d95b/trsd/trsdrff.htm
  (To specify a reference.)
  [0] SQ,7G3JTL39O0M3B
      C506 - reference
      Identification of a reference.
    [0] SQ - Container sequence number
        id: 1153 - referenceQualifier
        Code giving specific meaning to a reference segment or a reference
        number.
        type: an
        maxlen: 3
        required: true
    [1] 7G3JTL39O0M3B
        id: 1154 - referenceNumber
        Identification number the nature and function of which can be
        qualified by an entry in data element 1153 Reference qualifier.
        type: an
        maxlen: 35

RFF+SQ:7G3JTL39O0M3B'
TMD - transportMovementDetails http://www.unece.org/trade/untdid/d95b/trsd/trsdtmd.htm
  (To specify transport movement details for a goods item or equipment.)
  [0] 
      C219 - movementType
      Description of type of service for movement of cargo.
  [1] 
      8332 - equipmentPlan
      Description indicating equipment plan, e.g. FCL or LCL.
  [2] 2
      8341 - haulageArrangementsCoded
      Specification of the type of equipment haulage arrangements.

TMD+++2'
DTM - datetimeperiod http://www.unece.org/trade/untdid/d95b/trsd/trsddtm.htm
  (To specify date, and/or time, or period.)
  [0] 201,202008130000,203
      C507 - datetimeperiod
      Date and/or time, or period relevant to the specified date/time/period
      type.
    [0] 201 - Pick-up date/time of equipment
        id: 2005 - datetimeperiodQualifier
        Code giving specific meaning to a date, time or period.
        type: an
        maxlen: 3
        required: true
    [1] 202008130000
        id: 2380 - datetimeperiod
        The value of a date, a date and time, a time or of a period in a
        specified representation.
        type: an
        maxlen: 35
    [2] 203 - CCYYMMDDHHMM
        id: 2379 - datetimeperiodFormatQualifier
        Specification of the representation of a date, a date and time or of
        a period.
        type: an
        maxlen: 3

DTM+201:202008130000:203'
LOC - placelocationIdentification http://www.unece.org/trade/untdid/d95b/trsd/trsdloc.htm
  (To identify a country/place/location/related location one/related location
  two.)
  [0] 98
      3227 - placelocationQualifier
      Code identifying the function of a location.
  [1] LVRIX,139,6
      C517 - locationIdentification
      Identification of a location by code or name.
    [0] LVRIX
        id: 3225 - placelocationIdentification
        Identification of the name of place/location, other than 3164 City
        name.
        type: an
        maxlen: 25
    [1] 139 - Port
        id: 1131 - codeListQualifier
        Identification of a code list.
        type: an
        maxlen: 3
    [2] 6 - UN/ECE (United Nations - Economic Commission for Europe)
        id: 3055 - codeListResponsibleAgencyCoded
        Code identifying the agency responsible for a code list.
        type: an
        maxlen: 3
  [2] RIGA TERMINAL,TER,ZZZ
      C519 - relatedLocationOneIdentification
      Identification the first related location by code or name.
    [0] RIGA TERMINAL
        id: 3223 - relatedPlacelocationOneIdentification
        Specification of the first related place/location by code.
        type: an
        maxlen: 25
    [1] TER
        id: 1131 - codeListQualifier
        Identification of a code list.
        type: an
        maxlen: 3
    [2] ZZZ - Mutually defined
        id: 3055 - codeListResponsibleAgencyCoded
        Code identifying the agency responsible for a code list.
        type: an
        maxlen: 3

LOC+98+LVRIX:139:6+RIGA TERMINAL:TER:ZZZ'
CNT - controlTotal http://www.unece.org/trade/untdid/d95b/trsd/trsdcnt.htm
  (To provide control total.)
  [0] 16,1
      C270 - control
      Control total for checking integrity of a message or part of a message.
    [0] 16 - Total number of equipment
        id: 6069 - controlQualifier
        Determines the source data elements in the message which forms the
        basis for 6066 Control value.
        type: an
        maxlen: 3
        required: true
    [1] 1
        id: 6066 - controlValue
        Value obtained from summing the values specified by the Control
        Qualifier throughout the message (Hash total).
        type: n
        maxlen: 18
        required: true

CNT+16:1'
UNT - MessageTrailer http://www.unece.org/trade/untdid/d95b/trsd/trsdunt.htm
  (MessageTrailer)
  [0] 12
      9900 - segmentsNumber
      segmentsNumber
  [1] 141260500001
      9901 - msgRefNumber
      msgRefNumber

UNT+12+141260500001'
UNZ - InterchangeTrailer http://www.unece.org/trade/untdid/d95b/trsd/trsdunz.htm
  (InterchangeTrailer)
  [0] 1
      9902 - interchangeControlCount
      interchangeControlCount
  [1] 1412605
      9903 - interchangeControlRef
      interchangeControlRef
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
