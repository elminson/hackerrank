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
     * @throws \Exception
     */
    function longest($string = "")
    {
        if (!is_string($string)) {
            throw new \Exception("Parameter need to be a valid string");
        }

        if ($string == "") {
            return 0;
        }

        $array = str_split($string);
        $temp = [];
        $temp_count = 0;
        $longest_string = 0;
        try {
            for ($i = 0; $i < count($array); $i++) {
                if (in_array($array[$i], $temp)) {
                    $temp = [];
                    $temp_count = 1;
                } else {
                    $temp_count++;
                }
                $temp[] = $array[$i];
                if ($longest_string <= $temp_count) {
                    $longest_string = $temp_count;
                }
            }
        } catch (\Exception $e) {
            throw  new \Exception($e->getMessage());
        } catch (\Error $e) {
            throw  new \Error($e->getMessage());
        }
        return $longest_string;
    }
}