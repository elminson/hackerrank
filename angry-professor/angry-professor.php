<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: angry-professor.php
 * Desc: ...
 * Date: 7/11/2018
 * Time: 9:39 PM
 */

/* @param $k
 * @param $a
 * @return string
 */

// Complete the angryProfessor function below.
function angryProfessor($k, $a)
{
    $not = 0;
    $size = count($a);
    for ($index = 0; $index < $size; $index++) {
        if ($a[$index] <= 0) {
            $not++;
        }
    }
    return ($not < $k) ? "YES" : "NO";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf(/** @scrutinizer ignore-type */
    $stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);

    fscanf($stdin, "%[^\n]", $a_temp);

    $a = array_map('intval', /** @scrutinizer ignore-type */
        preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = angryProfessor($k, $a);

    fwrite(/** @scrutinizer ignore-type */
        $fptr, $result . "\n");
}

fclose(/** @scrutinizer ignore-type */
    $stdin);
fclose($fptr);
