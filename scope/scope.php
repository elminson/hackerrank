<?php

/**
 * Class Difference
 */
class Difference
{
    /**
     * @var array
     */
    private $elements = array();
    /**
     * @var
     */
    public $maximumDifference;

    /**
     * Difference constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->elements = $array;
    }

    /**
     * @return float|int
     */
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

    /**
     * @param $array
     * @return array
     */
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


$Number = intval(fgets(STDIN));
$array = array_map('intval', explode(' ', fgets(STDIN)));
$diff = new Difference($array);
$diff->ComputeDifference();
print ($diff->maximumDifference);
?>