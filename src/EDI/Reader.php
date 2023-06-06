<?php

declare(strict_types=1);

namespace EDI;

/**
 *  EDIFACT Messages Reader
 * (c)2016 Uldis Nelsons
 */
class Reader
{
    /**
     * @var array parsed EDI file
     */
    private $parsedfile;

    /**
     * @var array<int,string>
     */
    private $errors = [];

    /**
     * Reader constructor.
     *
     * @param string $url url or path ur EDI message
     */
    public function __construct(string $url = null)
    {
        if (isset($url)) {
            $this->load($url);
        }
    }

    /**
     * Get errors
     *
     * @return array<int,string>
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * reset errors
     *
     * @return void
     */
    public function resetErrors()
    {
        $this->errors = [];
    }

    /**
     * Returns the parsed file contained within.
     *
     * @returns array
     */
    public function getParsedFile(): array
    {
        return $this->parsedfile;
    }

    /**
     * @param string $url url to edi file, path to edi file or EDI message
     *
     * @return bool
     */
    public function load(string $url): bool
    {
        $this->parsedfile = (new Parser($url))->get();

        return $this->preValidate();
    }

    /**
     * @param array $parsed_file
     *
     * @return bool
     */
    public function setParsedFile(array $parsed_file): bool
    {
        $this->parsedfile = $parsed_file;

        return $this->preValidate();
    }

    /**
     * Do initial validation
     *
     * @return bool
     */
    public function preValidate(): bool
    {
        $this->errors = [];

        if (!\is_array($this->parsedfile)) {
            $this->errors[] = 'Incorrect format parsed file';

            return false;
        }

        $r = $this->readUNHmessageNumber();
        if (
            !$r
            &&
            (
                $this->errors !== []
                &&
                $this->errors[0] == 'Segment "UNH" is ambiguous'
            )
        ) {
            $this->errors = [];
            $this->errors[] = 'File has multiple messages';

            return false;
        }

        return true;
    }

    /**
     * Split multi messages to separate messages
     *
     * @param string $ediMessage
     *
     * @return array<mixed>
     */
    public static function splitMultiMessage(string $ediMessage): array
    {
        // init
        $splicedMessages = [];
        $message = [];
        $unb = false;
        $segment = '';

        foreach (self::unwrap($ediMessage) as $segment) {
            if (\strpos($segment, 'UNB') === 0) {
                $unb = $segment;

                continue;
            }

            if (\strpos($segment, 'UNH') === 0) {
                if ($unb) {
                    $message[] = $unb;
                }
                $message[] = $segment;

                continue;
            }

            if (\strpos($segment, 'UNT') === 0) {
                $message[] = $segment;
                $splicedMessages[] = $message;
                $message = [];

                continue;
            }

            if ($message) {
                $message[] = $segment;
            }
        }

        if (\strpos($segment, 'UNZ') === 0) {
            $segment = \preg_replace('#UNZ\+\d+\+#', 'UNZ+1+', $segment);
            foreach ($splicedMessages as $k => $message) {
                $splicedMessages[$k][] = $segment;
            }
        }

        foreach ($splicedMessages as $k => &$message) {
            $message = \implode(\PHP_EOL, $splicedMessages[$k]);
        }

        return $splicedMessages;
    }

    /**
     * read required value. if no found, registered error
     *
     * @param array<mixed>|string $filter segment filter by segment name and values
     * @param int                 $l1
     * @param false|int           $l2
     *
     * @return string|null
     */
    public function readEdiDataValueReq($filter, int $l1, $l2 = false)
    {
        return $this->readEdiDataValue($filter, $l1, $l2, true);
    }

    /**
     * read data value from parsed EDI data
     *
     * @param array|string $filter    'AGR' - segment code
     *                                or ['AGR',['1'=>'BB']], where AGR segment code and first element equal 'BB'
     *                                or ['AGR',['1.0'=>'BB']], where AGR segment code and first element zero subelement
     *                                equal 'BB'
     * @param int          $l1        first level item number (start by 1)
     * @param false|int    $l2        second level item number (start by 0)
     * @param bool         $required  if required, but no exist, register error
     *
     * @return string|null
     */
    public function readEdiDataValue($filter, int $l1, $l2 = false, bool $required = false)
    {
        $segment = false;
        $segment_count = 0;
        $segment_name = $filter;
        $filter_elements = false;
        if (\is_array($filter)) {
            $segment_name = $filter[0];
            $filter_elements = $filter[1];
        }

        // search segments which conform to filter
        foreach ($this->parsedfile as $edi_row) {
            if ($edi_row[0] == $segment_name) {
                if ($filter_elements) {
                    foreach ($filter_elements as $el_id => $el_value) {
                        $filter_ok = false;
                        $f_el_list = \explode('.', (string) $el_id);
                        if (\count($f_el_list) === 1) {
                            if (isset($edi_row[$el_id]) && $edi_row[$el_id] == $el_value) {
                                $filter_ok = true;
                            }
                        } elseif (
                            isset($edi_row[$f_el_list[0]])
                            && (
                                (
                                    isset($edi_row[$f_el_list[0]][$f_el_list[1]])
                                    && \is_array($edi_row[$f_el_list[0]])
                                    && $edi_row[$f_el_list[0]][$f_el_list[1]] == $el_value
                                ) || (
                                    isset($edi_row[$f_el_list[0]])
                                    && \is_string($edi_row[$f_el_list[0]])
                                    && $edi_row[$f_el_list[0]] == $el_value
                                )
                            )
                        ) {
                            $filter_ok = true;
                        }
                        if ($filter_ok === false) {
                            break;
                        }
                    }

                    if ($filter_ok === false) {
                        continue;
                    }
                }
                $segment = $edi_row;
                ++$segment_count;
            }
        }

        // no segment found
        if (!$segment) {
            if ($required) {
                $this->errors[] = 'Segment "' . $segment_name . '" no exist';
            }

            return null;
        }

        // found more than one segment - error
        if ($segment_count > 1) {
            $this->errors[] = 'Segment "' . $segment_name . '" is ambiguous';

            return null;
        }

        // validate elements
        if (!isset($segment[$l1])) {
            if ($required) {
                $this->errors[] = 'Segment value "' . $segment_name . '[' . $l1 . ']" no exist';
            }

            return null;
        }

        // requested first level element
        if ($l2 === false) {
            return $segment[$l1];
        }

        // requested second level element, but not exist
        if (!\is_array($segment[$l1]) || !isset($segment[$l1][$l2])) {
            if ($required) {
                $this->errors[] = 'Segment value "' . $segment_name . '[' . $l1 . '][' . $l2 . ']" no exist';
            }

            return null;
        }

        // second level element
        return $segment[$l1][$l2];
    }

    /**
     * read date from DTM segment period qualifier - codelist 2005
     *
     * @param int $PeriodQualifier period qualifier (codelist/2005)
     *
     * @return string|null YYYY-MM-DD HH:MM:SS
     */
    public function readEdiSegmentDTM($PeriodQualifier)
    {
        $date = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1, 1);
        $format = $this->readEdiDataValue(['DTM', ['1.0' => $PeriodQualifier]], 1, 2);
        if (empty($date)) {
            return $date;
        }
        switch ($format) {

            case 203: //CCYYMMDDHHMM
                return \preg_replace('#(\d\d\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '$1-$2-$3 $4:$5:00', $date);

            case 102: //CCYYMMDD
                return \preg_replace('/(\d{4})(\d{2})(\d{2})/', '$1-$2-$3', $date);

            default:
                return $date;
        }
    }

    /**
     * @deprecated
     *
     * @return string|null
     */
    public function readUNBDateTimeOfPpreperation()
    {
        return $this->readUNBDateTimeOfPreparation();
    }

    /**
     * @deprecated
     *
     * @return string|null
     */
    public function readUNBDateTimeOfPreperation()
    {
        return $this->readUNBDateTimeOfPreparation();
    }

    /**
     * get message preparation time
     *
     * @return string|null
     */
    public function readUNBDateTimeOfPreparation()
    {
        // separate date (YYMMDD) and time (HHMM)
        $date = $this->readEdiDataValue('UNB', 4, 0);
        if (!empty($date)) {
            $time = $this->readEdiDataValue('UNB', 4, 1);
            if ($time !== null) {
                $time = (string) \preg_replace('#(\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '20$1-$2-$3 $4:$5:00', $date . $time);
            }

            return $time;
        }

        // common YYYYMMDDHHMM
        $datetime = $this->readEdiDataValue('UNB', 4);
        if ($datetime !== null) {
            $datetime = (string) \preg_replace('#(\d\d\d\d)(\d\d)(\d\d)(\d\d)(\d\d)#', '$1-$2-$3 $4:$5:00', $datetime);
        }

        return $datetime;
    }

    public function readUNBInterchangeSender()
    {
        return $this->readEdiDataValue('UNB', 2);
    }

    public function readUNBInterchangeRecipient()
    {
        return $this->readEdiDataValue('UNB', 3);
    }

    /**
     * read transport identification number
     *
     * @param mixed $transportStageQualifier
     *
     * @return string|null
     */
    public function readTDTtransportIdentification($transportStageQualifier)
    {
        $transportIdentification = $this->readEdiDataValue(['TDT', ['1' => $transportStageQualifier]], 8, 0);
        if (!empty($transportIdentification)) {
            return $transportIdentification;
        }

        return $this->readEdiDataValue(['TDT', ['1' => $transportStageQualifier]], 8);
    }

    /**
     * read message type
     *
     * @return string|null
     */
    public function readUNHmessageType()
    {
        return $this->readEdiDataValue('UNH', 2, 0);
    }

    /**
     * read message number
     *
     * @return string|null
     */
    public function readUNHmessageNumber()
    {
        return $this->readEdiDataValue('UNH', 1);
    }

    /**
     * read message number
     *
     * @return string|null
     */
    public function readUNHmessageRealise()
    {
        return $this->readEdiDataValue('UNH', 3);
    }

    /**
     * Get groups from message.
     *
     * @param string $before segment before groups
     * @param string $start  first segment of group
     * @param string $end    last segment of group
     * @param string $after  segment after groups
     *
     * @return array<mixed>|false
     */
    public function readGroups(string $before, string $start, string $end, string $after)
    {
        // init
        $groups = [];
        $group = [];
        $position = 'before_search';

        foreach ($this->parsedfile as $edi_row) {
            // search before group segment
            if ($position == 'before_search' && $edi_row[0] == $before) {
                $position = 'before_is';

                continue;
            }

            if ($position == 'before_search') {
                continue;
            }

            if ($position == 'before_is' && $edi_row[0] == $before) {
                continue;
            }

            // after before search start
            if ($position == 'before_is' && $edi_row[0] == $start) {
                $position = 'group_is';
                $group[] = $edi_row;

                continue;
            }

            // if after before segment no start segment, search again before segment
            if ($position == 'before_is') {
                $position = 'before_search';

                continue;
            }

            // get group element
            if ($position == 'group_is' && $edi_row[0] != $end) {
                $group[] = $edi_row;

                continue;
            }

            // found end of group
            if ($position == 'group_is' && $edi_row[0] == $end) {
                $position = 'group_finish';
                $group[] = $edi_row;
                $groups[] = $group;
                $group = [];

                continue;
            }

            // next group start
            if ($position == 'group_finish' && $edi_row[0] == $start) {
                $group[] = $edi_row;
                $position = 'group_is';

                continue;
            }

            // finish
            if ($position == 'group_finish' && $edi_row[0] == $after) {
                break;
            }

            $this->errors[] = 'Reading group ' . $before . '/' . $start . '/' . $end . '/' . $after
                              . '. Error on position: ' . $position;

            return false;
        }

        return $groups;
    }

    /**
     * Get groups from message when last segment is unknown but you know the barrier
     * useful for invoices by default.
     *
     * @param string                  $start   first segment start a new group
     * @param array<array-key,string> $barrier barrier segment (NOT in group)
     *
     * @return array<mixed>
     */
    public function groupsExtract(string $start = 'LIN', array $barrier = ['UNS']): array
    {
        // init
        $groups = [];
        $group = [];
        $position = 'before_search';

        foreach ($this->getParsedFile() as $edi_row) {
            $segment = $edi_row[0];
            if (
                $position == 'group_is'
                &&
                (
                    $segment == $start
                    ||
                    \in_array($segment, $barrier, true)
                )
            ) {
                // end of group
                $groups[] = $group;
                // start new group
                $group = [];
                $position = 'group_finish';
            }

            if ($segment == $start) {
                $position = 'group_is';
            }

            // add element to group
            if ($position == 'group_is') {
                $group[] = $edi_row;
            }
        }

        return $groups;
    }

    /**
     * unwrap string splitting rows on terminator (if not escaped)
     *
     * @param string $string
     *
     * @return \Generator<string>
     */
    private static function unwrap($string)
    {
        $array = \preg_split("/(?<!\?)'/", $string);
        if ($array === false) {
            return;
        }

        foreach ($array as &$line) {
            $line = \preg_replace('#[\x00\r\n]#', '', $line);
            $temp = $line . "'";
            if ($temp !== "'") {
                yield $temp;
            }
        }
    }
}
