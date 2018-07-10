<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: utopian-tree.php
 * Desc: ...
 * Date: 7/10/2018
 * Time: 7:15 PM
 */


// Complete the utopianTree function below.
function utopianTree($n)
{
//$p= $n years .5 +1
//every $cycle = 2 ^ $p - 1
//Return  if $n ==1 is $cycles -1 else $cycles;
    $p = ceil($n * 0.5) + 1;
    $cycles = pow(2, $p) - 1;
    return (($n & 1) == 1) ? $cycles - 1 : $cycles;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = utopianTree($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
