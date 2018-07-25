<?php
#Solution Big O(n)
class FindPairs
{

    /**
     * @param $array
     */
    function pair($array, $pair)
    {
        $size = count($array);
        $a[] = $array[0];
        $found = false;
        for ($i = 0; $i < $size; $i++) {
            $number = $pair - $array[$i];
            if (in_array($number, $array)) {
                echo "$number, " . $array[$i];
                $found = true;
                break; #remove this line if you want to print all pairs found
            }
        }
        if (!$found) {
            echo "There is no pair that adds up to 10.";
        }

    }

    /**
     * @param $array
     */
    function pair10($array)
    {
        $size = count($array);
        $a[] = $array[0];
        $found = false;
        for ($i = 0; $i < $size; $i++) {
            $number = 10 - $array[$i];
            if (in_array($number, $array)) {
                echo "$number, " . $array[$i];
                $found = true;
                break; #remove this line if you want to print all pairs found
            }
        }
        if (!$found) {
            echo "There is no pair that adds up to 10.";
        }

    }
}
