<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}


class Student extends person
{
    protected $testScores, $firstName, $lastName, $id, $scores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($firstName, $lastName, $identification, $scores)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $identification;
        $this->scores = $scores;
    }
    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {
        $var = 0;
        $grades = ['O' => [90, 100], 'E' => [80, 89], 'A' => [70, 79], 'P' => [55, 69], 'D' => [40, 54], 'T' => [0, 39]];
        foreach ($this->scores as $key => $value) {
            $var += $value;
        }
        $avg = $var / count($this->scores);
        foreach ($grades as $grade => $value) {
            if (($avg >= $value[0] && $avg <= $value[1])) {
                return $grade;
                break;
            }
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
