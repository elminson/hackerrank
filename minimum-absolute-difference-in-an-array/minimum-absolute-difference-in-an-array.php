<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Desc: ...
 * Date: 7/21/2018
 * Time: 6:01 PM
 */

// Complete the minimumAbsoluteDifference function below.
function minimumAbsoluteDifference($arr)
{
    $size = count($arr);
    sort($arr, $size);
    $sum = 0;
    $min = 0;
    $sum = abs($arr[0] - $arr[1]);
    $sum = min($sum, abs($arr[$size - 1] - $arr[$size - 2]));
    $min = $sum;
    for ($i = 1; $i < $size - 1; $i++) {
        $sum = min(abs($arr[$i] - $arr[$i - 1]), abs($arr[$i] - $arr[$i + 1]));
        if ($sum < $min) {
            $min = $sum;
        }
    }
    return $min;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = minimumAbsoluteDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
