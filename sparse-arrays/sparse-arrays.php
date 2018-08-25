<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/25/2018
 * Time: 7:29 PM
 */


function matchingStrings($strings, $queries)
{
    $result = [];
    $i = 0;

    foreach ($queries as $query) {
        $count = 0;
        foreach ($strings as $string) {
            if ($string === $query) {
                $count++;
            }
        }
        $result[] = $count;
        $i++;
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $strings_count);

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = '';
    fscanf($stdin, "%[^\n]", $strings_item);
    $strings[] = $strings_item;
}

fscanf($stdin, "%d\n", $queries_count);

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = '';
    fscanf($stdin, "%[^\n]", $queries_item);
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($stdin);
fclose($fptr);
