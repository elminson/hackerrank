<?php

// Complete the jimOrders function below.
function jimOrders($orders)
{
    $t = [];
    for ($i = 0; $i < count($orders); $i++) {
        $t[] = $orders[$i][0] + $orders[$i][1];
    }
    $result = [];
    foreach ($t as $key => $value) {
        $result[$key + 1] = $value;
    }
    asort($result);
    return array_keys($result);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$orders = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $orders_temp);
    $orders[] = array_map('intval', preg_split('/ /', $orders_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = jimOrders($orders);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
