<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: flipping-bits.php
 * Desc: ...
 * Date: 7/21/2018
 * Time: 11:42 AM
 */


// Complete the flippingBits function below.
function flippingBits($n)
{
    $bin = decToBinary($n); // "00011010"
    $str = str_replace("0", "x", $bin);
    $str = str_replace("1", "b", $str);
    $str = str_replace("x", "1", $str);
    $str = str_replace("b", "0", $str);
    return base_convert($str, 2, 10);
}

function decToBinary($n)
{
    $str = "";
    for ($i = 31; $i >= 0; $i--) {
        $k = $n >> $i;
        if ($k & 1) {
            $str .= "1";
        } else {
            $str .= "0";
        }
    }
    return $str;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%ld\n", $n);

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);