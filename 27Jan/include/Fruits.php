<?php
//This program is set and get the name 

//class name is fruit
class Fruits
{
	  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) 
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}
//create the object of the class
//$obj = new Fruits();

//$obj->set_name('Apple');

//echo $obj->get_name();

?>