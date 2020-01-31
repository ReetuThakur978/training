<?php
interface MyClass
{ 
    public function method();    
} 
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
class Audi extends Car  implements MyClass
 {
  public function intro()
  {
    return "Choose quality! I'm an $this->name!"; 
  }
  public function method(){ 
        echo "Hello" . "\n"; 
    } 
  
}
$audi = new Audi("Audi");
echo $audi->intro();
echo $audi->method();
echo "<br>";
?>