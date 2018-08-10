<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/9/2018
 * Time: 8:53 PM
 */

class Stack
{
    public $stack_array = [];
    public $maximun = 0;

    /**
     * @param $var
     * @return int
     */
    public function acttion($var)
    {
        $action = intval($var[0]);
        $value = isset($var[1]) ? $var[1] : '';
        switch ($action) {
            case 1:
                {
                    $this->stack_array[] = $value;
                    if ($value > $this->maximun) {
                        $this->maximun = $value;
                    }
                    break;
                }
            case 2:
                {
                    array_pop($this->stack_array);
                    if (is_array($this->stack_array)) {
                        $this->maximun = @max($this->stack_array);
                    }
                    break;
                }
            case 3:
                {
                    return $this->maximun;
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
$stack = new Stack();
for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nms_temp);
    $result = $stack->acttion(explode(' ', $nms_temp));
    if ($result != "") {
        fwrite($fptr, $result . "\n");
    }
}
fclose($stdin);
fclose($fptr);