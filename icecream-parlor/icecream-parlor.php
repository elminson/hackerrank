<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/2/2018
 * Time: 8:08 PM
 */


function icecreamParlor($m, $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i == $j) {
                continue;
            }
            if ($arr[$i] + $arr[$j] == $m) {
                return [$i + 1, $j + 1];
            }
        }
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $m);

    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $arr_temp);

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = icecreamParlor($m, $arr);

    fwrite($fptr, implode(" ", $result) . "\n");
}

fclose($stdin);
fclose($fptr);