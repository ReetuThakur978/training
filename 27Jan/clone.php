<?php
//This program clone the method

//class name
class Person
{
   //create the variable
    public $name;
    public $age;
// constructor 
    public function __construct($name="",  $age=25)
    {
        $this->name = $name;
        $this->age  = $age;
       
    }
//Clone function
    // public function __clone()
    // {
    //     echo "your are cloning the object.<br>";
    // }

}

$person = new Person('John'); // Initially assigned.
$person2 = clone $person;


var_dump($person);
echo '<br>';
var_dump($person2)
?>