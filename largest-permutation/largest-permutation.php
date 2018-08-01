<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/1/2018
 * Time: 5:22 PM
 */

// Complete the largestPermutation function below.
function largestPermutation($k, $arr)
{
    {
        $pos = [];
        $n = count($arr);
        for ($i = 0; $i < $n; $i++) {
            $pos[$arr[$i]] = $i;
        }

        for ($i = 0; $i < $n && $k > 0; $i++) {

            // If element is already i'th largest,
            // then no need to swap
            if ($arr[$i] == $n - $i) {
                continue;
            }

            // Find position of i'th largest value, n-i
            $temp = $pos[$n - $i];

            // Swap the elements position
            $pos[$arr[$i]] = $pos[$n - $i];
            $pos[$n - $i] = $i;

            // Swap the ith largest value with the
            // current value at ith place
            $tmp1 = $arr[$temp];
            $arr[$temp] = $arr[$i];
            $arr[$i] = $tmp1;

            // decrement number of swaps
            --$k;
        }
    }
    return $arr;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = largestPermutation($k, $arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
