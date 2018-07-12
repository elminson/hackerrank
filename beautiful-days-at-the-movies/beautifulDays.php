<?php
/**
 * Created by edeoleo@gmail.com
 * User: Elminson De Oleo Baez
 * Filename: beautifulDay.php
 * Desc: ...
 * Date: 7/11/2018
 * Time: 10:23 PM
 */


/**
 * @param $i
 * @param $j
 * @param $k
 * @return int
 */

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k)
{
    $beautiful = 0;
    for ($x = $i; $x <= $j; $x++) {
        $reveser = reverse_integer($x);
        $result = ($x - $reveser) / $k;
        if (is_integer($result) || $result == 0) {
            $beautiful++;
        }
    }
    return $beautiful;
}

function reverse_integer($n)
{
    $reverse = 0;
    while ($n > 0) {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n / 10);
    }
    return $reverse;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);



