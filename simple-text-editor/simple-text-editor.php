<?php
/**
 * User: Elminson De Oleo Baez
 * Date: 8/9/2018
 * Time: 7:12 PM
 */


/*Initially,  is empty. The following sequence of  operations are described below:

. We append  to , so .
Print the  character on a new line. Currently, the  character is c.
Delete the last  characters in  (), so .
Append  to , so .
Print the  character on a new line. Currently, the  character is y.
Undo the last update to , making  empty again (i.e., ).
Undo the next to last update to  (the deletion of the last  characters), making .
Print the  character on a new line. Currently, the  character is a.

1)append - Append string  to the end of .
2)delete - Delete the last  characters of .
3) print - Print the  character of .
4)undo - Undo the last (not previously undone) operation of type  or , reverting  to the state it was in prior to that operation.

*/

class Editor
{
    public $string = "";
    public $preview_string = [];

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
                    $this->preview_string[] = $this->string;
                    $this->string .= $value;
                    break;
                }
            case 2:
                {
                    $this->preview_string[] = $this->string;
                    $this->string = substr($this->string, 0, strlen($this->string) - $value);
                    break;
                }
            case 3:
                {
                    if (isset($this->string[$value - 1])) {
                        return $this->string[$value - 1];
                    }
                    break;
                }
            case 4:
                {
                    $this->string = end($this->preview_string);
                    array_pop($this->preview_string);
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
$editor = new Editor();
for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = '';

    fscanf($stdin, "%[^\n]", $nms_temp);
    $result = $editor->acttion(explode(' ', $nms_temp));
    if ($result != "") {
        fwrite($fptr, $result . "\n");
    }
}
fclose($stdin);
fclose($fptr);