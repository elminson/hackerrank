<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/6/2018
 * Time: 3:41 PM
 */


function equalStacks($h1, $h2, $h3)
{
    $sum1 = array_sum($h1);
    $sum2 = array_sum($h2);
    $sum3 = array_sum($h3);
    $n1 = count($h1);
    $n2 = count($h2);
    $n3 = count($h3);
    $top1 = 0;
    $top2 = 0;
    $top3 = 0;
    while (1) {

        // If any stack is empty
        if ($top1 == $n1 || $top2 == $n2 ||
            $top3 == $n3) {
            return 0;
        }

        // If sum of all three stack are equal.
        if ($sum1 == $sum2 && $sum2 == $sum3) {
            return $sum1;
        }

        // Finding the stack with
        // maximum sum and
        // removing its top element.
        if ($sum1 >= $sum2 && $sum1 >= $sum3) {
            $sum1 -= $h1[$top1++];
        } else {
            if ($sum2 >= $sum3 && $sum2 >= $sum3) {
                $sum2 -= $h2[$top2++];
            } else {
                if ($sum3 >= $sum2 && $sum3 >= $sum1) {
                    $sum3 -= $h3[$top3++];
                }
            }
        }
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $n1N2N3_temp);
$n1N2N3 = explode(' ', $n1N2N3_temp);

$n1 = intval($n1N2N3[0]);

$n2 = intval($n1N2N3[1]);

$n3 = intval($n1N2N3[2]);

fscanf($stdin, "%[^\n]", $h1_temp);

$h1 = array_map('intval', preg_split('/ /', $h1_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $h2_temp);

$h2 = array_map('intval', preg_split('/ /', $h2_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $h3_temp);

$h3 = array_map('intval', preg_split('/ /', $h3_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalStacks($h1, $h2, $h3);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
