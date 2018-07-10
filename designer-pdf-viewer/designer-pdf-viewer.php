<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Filename: designer-pdf-viewer.php
 * Desc: ...
 * Date: 7/10/2018
 * Time: 6:30 PM
 */


// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word)
{
    $chars = "abcdefghijklmnopqrstuvwxyz";
    $chars_array = str_split($chars);
    $words = str_split($word);
    foreach ($chars_array as $key => $value) {
        $a[$value] = $h[$key];
    }
    foreach ($words as $key => $value) {
        $new_arr[] = $a[$value];
    }
    rsort($new_arr);
    return ($new_arr[0] * count($words));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
