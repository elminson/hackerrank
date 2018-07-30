<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: ${FILENAME}
 * Desc: ...
 * Date: 7/30/2018
 * Time: 1:01 PM
 */

// Complete the marcsCakewalk function below.
function marcsCakewalk($calorie)
{
    sort($calorie);
    $calorie_clone = $calorie;
    rsort($calorie_clone);
    $total = 0;
    foreach ($calorie as $key => $value) {
        $total += ($calorie_clone[$key] * (pow(2, $key)));
    }
    return $total;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $calorie_temp);

$calorie = array_map('intval', preg_split('/ /', $calorie_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = marcsCakewalk($calorie);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
