<?php
//This program is set and get the name 

//class name is fruit
class Abc
{
	  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($color) 
  {
   echo $this->color = $color;die;
  }
  function get_name()
  {
    return $this->color;
  }
}
//create the object of the class
//$obj = new Abc();

//$obj->set_name('Red');

//echo $obj->get_name();

?>