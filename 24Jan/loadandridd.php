<?php
//Polymorphism include Overloading and overidding

ini_set('display_errors', 1);
error_reporting(E_ALL);
//Parent class
Class ABC 
{
   public function display($value1) 
   {
      echo "Single argument : $value1";
   }
  public function display2($value1,$value2) //method overloading
  {
     echo "Two arguments : $value1, $value2";
  }
    
}

Class BCD extends ABC//Child class
{
      public function display($value1) 
   {
      echo "Display Message $value1";
   }
  
}

$obj = new BCD(); //create object
$obj->display(23);
?>