<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/19/2018
 * Time: 9:28 PM
 *
 */

/** @param $q
 */
function minimumBribes($q)
{
    $bribes = 0;
    for ($i = count($q) - 1; $i >= 0; $i--) {
        if ($q[$i] - ($i + 1) > 2) {
            echo "Too chaotic\n";
            return;
        }
        $max = max(0, $q[$i] - 2);
        for ($j = $max; $j < $i; $j++) {
            if ($q[$j] > $q[$i]) {
                $bribes++;
            }
        }
    }
    echo $bribes . "\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $q_temp);

    $q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

    minimumBribes($q);
}

fclose($stdin);
