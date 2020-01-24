<?php 
/* Use of static method in PHP */
  
class A { 
      
    public function test($var = "Hello World") { 
        $this->var = $var; 
        return $this->var; 
    } 
} 
  
class B extends A{ 
    public static function test($var) { 
        $var = "This is static"; 
        return $var; 
    } 
} 
  
// Creating Object of class A 
$obj = new A(); 
  
echo $obj->test('This is non-static');  
echo "\n"; 
echo B::test('This is non-static');  
  
?> 




