<?php
//This program is perform constructor and destructor

//take a class Fruit
class Fruit {
	//two variable declared, with public keyword
  public $name;
  public $color;

  function __construct($name)//construct the value
  {
    $this->name = $name; 
  }
  function __destruct() //destruct the value
  {
    echo "The fruit is {$this->name}."; //print the statement
  }
}

$apple = new Fruit("Apple and Banana");//create object
?>