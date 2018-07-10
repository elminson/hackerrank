<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Date: 7/10/2018
 * Time: 12:59 PM
 */

// Complete the migratoryBirds function below.
function migratoryBirds($ar)
{
    $arr_sum = array_count_values($ar);
    ksort($arr_sum);
    $key = array_search(max($arr_sum), $arr_sum);
    return $key;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
