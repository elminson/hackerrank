<?php

namespace Elminson\Longest;

/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Desc: #3. Longest Substring Without Repeating Characters
 * Date: 7/25/2018
 * Time: 10:02 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

$longestString = new LongestString();
echo $longestString->longest("abcabcbb");   #should return 3
echo "\n";
echo $longestString->longest("bbbbb");      #should return 1
echo "\n";
echo $longestString->longest("pwwkew");     #should return 3
echo "\n";
echo $longestString->longest("");           #should return 0
echo "\n";
try {
    echo $longestString->longest(null);         #should return 0
} catch (\Exception $e) {
    echo $e->getMessage()."\n";
}
try {
    echo $longestString->longest([]);         #should return 0
} catch (\Exception $e) {
    echo $e->getMessage()."\n";
}

