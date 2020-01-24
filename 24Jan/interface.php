<?php  
//This program is used interface  
interface MyName{ 
  
    public function method1(); 
    public function method2(); 
  
} 
  //MyClass implements the MyName interface
class MyClass implements MyName{ 
  
    public function method1(){ 
        echo "Hello" . "\n"; 
    } 
  
    public function method2(){ 
        echo "Everyone". "\n"; 
    } 
}  
  
$obj = new MyClass; //create the object of MyClass
$obj->method1(); 
$obj->method2(); 
  
?> 