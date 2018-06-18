<?php
/*
* for each element in  array A, and array B 
* if elemennt A[n] == B[m] Common [] = A[n]abstract
* end for each 
* retun Array ElementsFounds
*/

class FindArray
{

    public function find($arrayA, $arrayB)
    {
        $common = [];
        sort($arrayA);
        sort($arrayB);
        foreach ($arrayA as $keyA => $valueA) {
            if (in_array($valueA, $arrayB)) {
                $common[] = $valueA;
            }

        }
        return $common;
    }

    public function findOptimal($arrayA, $arrayB)
    {
        sort($arrayA);
        sort($arrayB);
        return array_intersect($arrayA, $arrayB);
    }

}

$new = new FindArray();
print_r($new->find([29, 27, 2, 3], [6, 2, 3, 2, 1, 29]));
print_r($new->findOptimal([29, 27, 2, 3], [6, 2, 3, 2, 1, 29]));