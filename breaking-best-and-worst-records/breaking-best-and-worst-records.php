<?php

// Complete the breakingRecords function below.
function breakingRecords($scores)
{
    $size = count($scores);
    $min = $scores[0];
    $max = $scores[0];
    $x = 1;
    $min_r = 0;
    $max_r = 0;
    $board = [];
    // base case
    $board[0]['game'] = 0;
    $board[0]['score'] = $scores[0];
    $board[0]['max'] = $max;
    $board[0]['min'] = $min;
    while ($x < $size) {
        $min = min($min, $scores[$x]);
        $max = max($max, $scores[$x]);
        $board[$x]['game'] = $x;
        $board[$x]['score'] = $scores[$x];
        $board[$x]['max'] = $max;
        $board[$x]['min'] = $min;
        if ($min < $board[$x - 1]['min']) {
            $min_r++;
        }
        if ($max > $board[$x - 1]['max']) {
            $max_r++;
        }
        $x++;
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
