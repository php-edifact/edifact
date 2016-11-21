<?php

/**
 * EDIFACT Messages Encoder
 * (c)2016 Stefano Sabatini
 */

namespace EDI;

class Encoder {

    private $output = '';
    private $UNAActive = false; // disable by default to preserve backward compatibility 
    private $array = array();

    /**
     * @var string : component separator character (default :)
     */
    private $sep_comp;

    /**
     * @var string : data separator character (default +)
     */
    private $sep_data;

    /**
     * @var string : dec separator character (no use but here) (default .)
     */
    private $sep_dec;

    /**
     * @var string : release character (default ?)
     */
    private $symb_rel;

    /**
     * @var string : repetition character (no use but here) (default *)
     */
    private $symb_rep;

    /**
     * @var string : end character (default ')
     */
    private $symb_end;

    public function __construct($array = null, $wrap = true) {
        $this->setUNA();
        if ($array === null) {
            return;
        }
        $this->encode($array, $wrap);
    }

    public function encode($arr, $wrap = true) {
        $this->array = $arr;
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
        $this->output = $edistring;
        return $edistring;
    }

    public function encodeSegment($row) {
        $str = '';
        $t = count($row);
        for ($i = 0; $i < $t; $i++) {
            $elm = '';
            if (!is_array($row[$i])) {
                $elm = $this->escapeValue($row[$i]);
            } else {
                foreach ($row[$i] as &$temp) {
                    $temp = $this->escapeValue($temp);
                    //var_dump($temp);
                }
                $elm = implode($this->sep_comp, $row[$i]);
            }
            $str .= $elm;
            if ($i == $t - 1) {
                break;
            }
            $str .= $this->sep_data;
        }
        $str .= $this->symb_end;
        return $str;
    }

//    private function escapeValue($str) {
//        $str = preg_replace('/(' . $this->symb_end . '|\\'.$this->sep_data.'|' . $this->sep_comp . '|\\'.$this->symb_rel.')/', '?$1', $str, -1);
//        return $str;
//    }
    private function escapeValue($str) {
        $str = preg_replace('/(\'|\\+|:|\\?)/', '?$1', $str, -1);
        return $str;
    }

    public function get() {
        if ($this->UNAActive) {
            return "UNA" . $this->sep_comp .
                    $this->sep_data .
                    $this->sep_dec .
                    $this->symb_rel .
                    $this->symb_rep .
                    $this->symb_end . $this->output;
        } else {
            return $this->output;
        }
    }

    public function setUNA($chars = ":+.? '") {
        if (is_string($chars) && strlen($chars) == 6) {
            $this->sep_comp = $chars[0];
            $this->sep_data = $chars[1];
            $this->sep_dec = $chars[2];
            $this->symb_rel = $chars[3];
            $this->symb_rep = $chars[4];
            $this->symb_end = $chars[5];
            if ($this->output != '') {
                $this->output = $this->encode($this->array);
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function enableUNA() {
        $this->UNAActive = TRUE;
    }

    public function disableUNA() {
        $this->UNAActive = FALSE;
    }

}

