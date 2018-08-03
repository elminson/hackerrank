<?php

function missingNumbers($arr, $brr)
{
    $temp = array_count_values($brr);
    $temp_a = array_count_values($arr);
    arsort($temp);
    arsort($temp_a);
    $result = [];
    foreach ($temp as $key => $value) {
        if ($value != $temp_a[$key]) {
            $result[] = $key;
        }
    }
    sort($result);
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%d\n", $m);

fscanf($stdin, "%[^\n]", $brr_temp);

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = missingNumbers($arr, $brr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);