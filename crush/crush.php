<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/19/2018
 * Time: 3:44 PM
 */

/**
 * @param $number
 * @param $queries
 * @return int|mixed
 */

function arrayManipulation($number, $queries) {

    $array=[];
    for ($index = 0; $index < count($queries); $index++)
    {
        $array[$queries[$index][0]-1]=0;
        $array[$queries[$index][1]]=0;
    }
    for ($index = 0; $index < count($queries); $index++)
    {
        $a= $queries[$index][0];
        $b= $queries[$index][1];
        $k= $queries[$index][2];
        $array[$a-1] += $k;
        $array[$b] -= $k;
    }

    $sum=0;
    $max=0;
    for ($index = 0; $index < $number; $index++)
    {
        @$sum += $array[$index];
        if ($sum > $max)
            $max = $sum;
    }
    return $max;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries = array();

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);


