<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: camelcase.php
 * Desc: ...
 * Date: 7/11/2018
 * Time: 9:08 PM
 */

// Complete the camelcase function below.
function camelcase($s)
{
    $match = preg_match_all('/[A-Z]/', $s);
    return $match + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
