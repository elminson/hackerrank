<?php

// Complete the breakingRecords function below.
function breakingRecords($scores)
{
    $size = count($scores);
    $min = $scores[0];
    $max = $scores[0];
    $index = 1;
    $min_r = 0;
    $max_r = 0;
    $board = [];
    // base case
    $board[0]['game'] = 0;
    $board[0]['score'] = $scores[0];
    $board[0]['max'] = $max;
    $board[0]['min'] = $min;
    while ($index < $size) {
        $min = min($min, $scores[$index]);
        $max = max($max, $scores[$index]);
        $board[$index]['game'] = $index;
        $board[$index]['score'] = $scores[$index];
        $board[$index]['max'] = $max;
        $board[$index]['min'] = $min;
        if ($min < $board[$index - 1]['min']) {
            $min_r++;
        }
        if ($max > $board[$index - 1]['max']) {
            $max_r++;
        }
        $index++;
    }

    return [$max_r, $min_r];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
