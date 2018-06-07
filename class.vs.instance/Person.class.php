<?php
  class Person{
    public $age;
    public function __construct($initialAge){
      // Add some more code to run some checks on initialAge
      $this->age=$initialAge;
    }
    public  function amIOld(){
      // Do some computations in here and print out the correct statement to the console
      switch ($this->age) {
        case ($this->age <0):
          echo "Age is not valid, setting age to 0.\n";
          $this->age=0;
          echo "You are young.\n";
          //$this->amIOld();
          break;
        case ($this->age <13):
          echo "You are young.\n";
          break;
        case ($this->age>=13 && $this->age <18):
          echo "You are a teenager.\n";
          break;
        case ($this->age >=18):
          echo "You are old.\n";
          break;
      }
    }
    public  function yearPasses(){
      // Increment the age of the person in here
      $this->age++;
    }
  }