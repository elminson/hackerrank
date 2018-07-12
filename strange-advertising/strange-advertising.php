<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: strange-advertising.php
 * Desc: ...
 * Date: 7/12/2018
 * Time: 12:09 AM
 * /
 *
 * /** @param $n
 * @return float|int
 */

function viralAdvertising($n)
{
//day 1 likes  = floor(5/2) = 2;
//shared = likes + (3 per day)
//Cumulative = Cumulative + liked
    $sum = 0;
    $shared = 5;
    $liked = floor($shared / 2);
    for ($i = 1; $i <= $n; $i++) {
        //echo $i . "==> Shared =>" . $shared . " ==>Liked ==> $liked ==> Sum ==> $sum \n";
        $sum += $liked;
        $shared = $liked * 3;
        $liked = floor($shared / 2);
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
