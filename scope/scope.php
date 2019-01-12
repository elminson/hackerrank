<?php
class Difference{
    private $elements=array();
    public $maximumDifference;
    public function __construct(array $array)
    {
        $this->elements = $array;
    }

    public function ComputeDifference()
    {
        $this->maximumDifference = 0;
        foreach ($this->pc_array($this->elements) as $combination) {
            if (2 == count($combination)) {
                $abs = abs($combination[0] - $combination[1]);
                if ($this->maximumDifference < $abs) {
                    $this->maximumDifference = $abs;
                }
            }
        }
        return $this->maximumDifference;
    }

    public function pc_array($array)
    {
        // initialize by adding the empty set
        $results = array(array());

        foreach ($array as $element)
            foreach ($results as $combination)
                array_push($results, array_merge(array($element), $combination));

        return $results;
    }

} //End of Difference class


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>