<?php

declare(strict_types=1);

namespace EDI;

/**
 * EDIFACT Messages Encoder
 * (c) 2018 Stefano Sabatini
 */
class Encoder
{
    /**
     * @var string
     */
    private $output = '';

    /**
     * @var bool
     */
    private $UNAActive = false; // disable by default to preserve backward compatibility

    /**
     * @var array
     */
    private $originalArray = [];

    /**
     * @var bool
     */
    private $wrap = true; //when false adds a newline after each segment

    /**
     * @var string : component separator character (default :)
     */
    private $sepComp;

    /**
     * @var string : data separator character (default +)
     */
    private $sepData;

    /**
     * @var string : dec separator character (no use but here) (default .)
     */
    private $sepDec;

    /**
     * @var string : release character (default ?)
     */
    private $symbRel;

    /**
     * @var string : repetition character (no use but here) (default space)
     */
    private $symbRep;

    /**
     * @var string : end character (default ')
     */
    private $symbEnd;

    /**
     * Encoder constructor.
     *
     * @param array|null $array
     * @param bool       $wrap
     */
    public function __construct($array = null, $wrap = true)
    {
        $this->setUNA(":+.? '", false);
        if ($array === null) {
            return;
        }

        /** @noinspection UnusedFunctionResultInspection */
        $this->encode($array, $wrap);
    }

    /**
     * @param array $array
     * @param bool  $wrap
     * @param bool  $filterKeys
     *
     * @return string
     */
    public function encode(array $array, $wrap = true, $filterKeys = false): string
    {
        $this->originalArray = $array;
        $this->wrap = $wrap;

        $edistring = '';
        $count = \count($array);
        $k = 0;
        foreach ($array as $row) {
            ++$k;
            if ($filterKeys) {
                unset($row['segmentIdx']);
            }
            $row = \array_values($row);
            $edistring .= $this->encodeSegment($row);
            if (!$wrap && $k < $count) {
                $edistring .= "\n";
            }
        }
        $this->output = $edistring;

        return $edistring;
    }

    /**
     * @param array $row
     *
     * @return string
     */
    public function encodeSegment(array $row): string
    {
        // init
        $str = '';
        $t = \count($row);

        /** @noinspection AlterInForeachInspection */
        foreach ($row as $i => &$iValue) {
            if (\is_array($iValue)) {
                if (
                    \count($iValue) === 1
                    &&
                    \is_array(\reset($iValue))
                ) {
                    $iValue = \array_pop($iValue);
                }

                /** @noinspection NotOptimalIfConditionsInspection */
                if (\is_array($iValue)) {
                    foreach ($iValue as &$temp) {
                        $temp = $this->escapeValue($temp);
                    }
                    unset($temp);
                }

                $elm = \implode($this->sepComp, $iValue);
            } else {
                $elm = $this->escapeValue($iValue);
            }

            $str .= $elm;
            if ($i == $t - 1) {
                break;
            }
            $str .= $this->sepData;
        }

        $str .= $this->symbEnd;

        return $str;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        if ($this->UNAActive) {
            $una = 'UNA' . $this->sepComp .
                   $this->sepData .
                   $this->sepDec .
                   $this->symbRel .
                   $this->symbRep .
                   $this->symbEnd;
            if ($this->wrap === false) {
                $una .= "\n";
            }

            return $una . $this->output;
        }

        return $this->output;
    }

    /**
     * @param string $chars
     * @param bool   $user_call
     *
     * @return bool
     */
    public function setUNA(string $chars, bool $user_call = true): bool
    {
        if (\strlen($chars) == 6) {
            $this->sepComp = $chars[0];
            $this->sepData = $chars[1];
            $this->sepDec = $chars[2];
            $this->symbRel = $chars[3];
            $this->symbRep = $chars[4];
            $this->symbEnd = $chars[5];

            if ($user_call) {
                $this->enableUNA();
            }

            if ($this->output != '') {
                $this->output = $this->encode($this->originalArray);
            }

            return true;
        }

        return false;
    }

    /**
     * @return void
     */
    public function enableUNA()
    {
        $this->UNAActive = true;
    }

    /**
     * @return void
     */
    public function disableUNA()
    {
        $this->UNAActive = false;
    }

    /**
     * @param int|string $str
     *
     * @return string
     */
    private function escapeValue(&$str): string
    {
        $search = [
            $this->symbRel,
            $this->sepComp,
            $this->sepData,
            $this->symbEnd,
        ];
        $replace = [
            $this->symbRel . $this->symbRel,
            $this->symbRel . $this->sepComp,
            $this->symbRel . $this->sepData,
            $this->symbRel . $this->symbEnd,
        ];

        return \str_replace($search, $replace, (string) $str);
    }
}
