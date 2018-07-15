<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: save-the-prisoner
 * Desc: ...
 * Date: 7/15/2018
 * Time: 3:30 PM
 */


// Complete the saveThePrisoner function below.
function saveThePrisoner($n, $m, $s)
{

    // n = prisioners
    // s = seats
    // m = sweets
    // The id is equal number of sweets-1 + seats(s) mod of prisioners(n)
    // echo "id = ( seat + ( sweets - 1)) % prisioners \n";
    // echo "id = ($s + ($m - 1)) % $n \n";
    $id = ($s + ($m - 1)) % $n;
    //if id is == 0 is the last prisioner
    return $id == 0 ? $n : $id;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nms_temp);
    $nms = explode(' ', $nms_temp);

    $n = intval($nms[0]);

    $m = intval($nms[1]);

    $s = intval($nms[2]);

    $result = saveThePrisoner($n, $m, $s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
