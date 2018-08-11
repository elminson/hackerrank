<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/10/2018
 * Time: 11:10 PM
 */

/*
1 x: Enqueue element  into the end of the queue.
2: Dequeue the element at the front of the queue.
3: Print the element at the front of the queue.
*/


class Queue
{
    public $queue = [];

    /**
     * @param $var
     * @return
     */
    public function acttion($var)
    {
        $action = intval($var[0]);
        $value = isset($var[1]) ? $var[1] : '';
        switch ($action) {
            case 1:
                {
                    $this->queue[] = $value;
                    break;
                }
            case 2:
                {
                    array_shift($this->queue);
                    break;
                }
            case 3:
                {
                    return $this->queue[0];
                    break;
                }
            default:
                {
                    echo "no action\n";
                }
        }
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $t);
$queue = new Queue();
for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = '';

    fscanf($stdin, "%[^\n]", $nms_temp);
    $result = $queue->acttion(explode(' ', $nms_temp));
    if ($result != "") {
        fwrite($fptr, $result . "\n");
    }
}
fclose($stdin);
fclose($fptr);
