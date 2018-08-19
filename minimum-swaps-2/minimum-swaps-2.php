<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/19/2018
 * Time: 4:59 PM
 */

/**
 * @param $array
 * @return int
 */
function minimumSwaps($array)
{
    $swaps = 0;
    $size = count($array);
    for ($i = 0; $i < $size; $i++) {
        while ($i + 1 != $array[$i]) {
            $j = $array[$i] - 1;
            if ($i >= $size || $j >= $size) {
                break;
            }
            $j_value = $array[$j];
            $i_value = $array[$i];
            $array[$i] = $j_value;
            $array[$j] = $i_value;
            $swaps += 1;
        }
    }
    return $swaps;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
