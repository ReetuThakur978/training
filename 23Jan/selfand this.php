<?php 
  
class Name { 
    function prnt() 
    { 
        echo 'Parent Class'; 
    } 
  
    function bar()
    { 
        self::prnt(); 
    } 

    // function ab() { 
    //     $this->prnt(); 
    // } 
  
} 
  
class Child extends Name 
{ 
    function prnt() 
    { 
        echo 'Child Class'; 
    } 
    function ab() { 
        $this->prnt(); 
    } 

} 
  
$parent = new Child(); 
$parent->bar();
$parent->ab(); 
?> 