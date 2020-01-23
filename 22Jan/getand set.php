<?php
 
class Person{
 private $firstName;
 
    public function __get($Name)
    {
      echo "hello: $Name";
 } 
 public function __set($Nane, $Value)
 {
 echo $propertyNane ;

 } 
 
}
 
$p = new Person();
 
$p->firstName = 'Reetu';
echo $p->firstName;
 
$p->lastName = 'Thakur';
echo $p->lastName;
?>
