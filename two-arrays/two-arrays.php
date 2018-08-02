<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/2/2018
 * Time: 10:59 AM
 */


function twoArrays($k, $A, $B)
{
    sort($A);
    rsort($B);
    foreach ($A as $key => $value) {
        if ($B[$key] + $value < $k) {
            return "NO";
        }
    }
    return "YES";

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);

    fscanf($stdin, "%[^\n]", $A_temp);

    $A = array_map('intval', preg_split('/ /', $A_temp, -1, PREG_SPLIT_NO_EMPTY));

    fscanf($stdin, "%[^\n]", $B_temp);

    $B = array_map('intval', preg_split('/ /', $B_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = twoArrays($k, $A, $B);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
