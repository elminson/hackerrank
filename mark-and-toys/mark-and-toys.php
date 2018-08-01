<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/1/2018
 * Time: 5:38 PM
 */

// Complete the maximumToys function below.
function maximumToys($prices, $k)
{
    sort($prices);
    $result = [];
    $x = count($prices);
    $sum = 0;
    for ($i = 0; $i < $x; $i++) {
        $sum += $prices[$i];
        if ($sum < $k) {
            $result[] = $prices[$i];
        } else {
            return count($result);
        }
    }
    return count($result);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $prices_temp);

$prices = array_map('intval', preg_split('/ /', $prices_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = maximumToys($prices, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);