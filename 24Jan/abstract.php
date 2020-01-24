<?php
//abstract class program

// Parent class
abstract class Car 
{
  public $name;
  public function set($name) 
  {
    $this->name = $name;
  }
  abstract public function intro(); 
}

// Child classes
class Audi extends Car
 {
  public function intro()
  {
    return "Choose quality! I'm an $this->name!"; 
  }
}
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
?>
