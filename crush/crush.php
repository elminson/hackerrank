<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/19/2018
 * Time: 3:44 PM
 */

/**
 * @param $n
 * @param $queries
 * @return int|mixed
 */

function arrayManipulation($n, $queries) {

    $ar=[];
    for ($i = 0; $i < count($queries); $i++)
    {
        $ar[$queries[$i][0]-1]=0;
        $ar[$queries[$i][1]]=0;
    }
    for ($i = 0; $i < count($queries); $i++)
    {
        $a= $queries[$i][0];
        $b= $queries[$i][1];
        $k= $queries[$i][2];
        $ar[$a-1] += $k;
        $ar[$b] -= $k;
    }

    $sum=0;
    $max=0;
    for ($i = 0; $i < $n; $i++)
    {
        @$sum += $ar[$i];
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


