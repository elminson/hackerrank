<?php

namespace Elminson\Longest;

/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Desc: ...
 * Date: 7/25/2018
 * Time: 10:02 PM
 */
class LongestString
{
    /**
     * @param $string
     * @return int
     */
    function longest($string)
    {
        $array = str_split($string);
        $temp = [];
        $temp_count = 0;
        $longest_string = 0;
        for ($i = 0; $i < count($array); $i++) {
            if (in_array($array[$i], $temp)) {
                $temp = [];
                $temp[] = $array[$i];
                $temp_count = 1;
            } else {
                $temp[] = $array[$i];
                $temp_count++;
            }
            if ($longest_string <= $temp_count) {
                $longest_string = $temp_count;
            }
        }
        return $longest_string;
    }
}