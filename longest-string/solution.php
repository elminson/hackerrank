<?php
#3. Longest Substring Without Repeating Characters

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
    return $next;
}

echo longest("abcabcbb");   #should return 3 
echo longest("bbbbb");      #should return 1
echo longest("pwwkew");     #should return 3
