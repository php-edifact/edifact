<?php
/**
 * EDIFACT Messages Encoder
 * (c)2016 Stefano Sabatini
 */

namespace EDI;

class Encoder
{
    private $output='';

    public function __construct($array = null, $wrap = true)
    {
        if ($array === null) {
            return;
        }
        $this->output = $this->encode($array, $wrap);
    }

    public function encode($arr, $wrap = true)
    {
        $edistring = '';
        $count = count($arr);
        $k = 0;
        foreach ($arr as $row) {
            $k++;
            $row = array_values($row);
            $edistring .= $this->encodeSegment($row);
            if (!$wrap && $k < $count) {
                $edistring .= "\n";
            }
        }
        return $edistring;
    }

    public function encodeSegment($row)
    {
        $str='';
        $t = count($row);
        for ($i=0; $i<$t; $i++) {
            $elm = '';
            if (!is_array($row[$i])) {
                $elm = $this->escapeValue($row[$i]);
            } else {
                foreach ($row[$i] as &$temp) {
                    $temp = $this->escapeValue($temp);
                }
                $elm = implode(":", $row[$i]);
            }
            $str .= $elm;
            if ($i == $t-1) {
                break;
            }
            $str .= "+";
        }
        $str .= "'";
        return $str;
    }

    private function escapeValue($str)
    {
        $str = preg_replace('/(\'|\\+|:|\\?)/', '?$1', $str, -1);
        return $str;
    }

    public function get()
    {
        return $this->output;
    }
}
