<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/6/2018
 * Time: 11:36 AM
 */


function isBalanced($string)
{
    $size = strlen($string);
    $stack = [];

    for ($i = 0; $i < $size; $i++) {
        if ($string[$i] == "(") {
            array_push($stack, 0);
        }
        if ($string[$i] == ")" && array_pop($stack) !== 0) {
            return "NO";
        }
        if ($string[$i] == "[") {
            array_push($stack, 1);
        }
        if ($string[$i] == "]" && array_pop($stack) !== 1) {
            return "NO";
        }
        if ($string[$i] == "{") {
            array_push($stack, 2);
        }
        if ($string[$i] == "}" && array_pop($stack) !== 2) {
            return "NO";
        }
    }
    if ($size == 0 || count($stack) > 0) {
        return "NO";
    }
    return "YES";

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = isBalanced($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
