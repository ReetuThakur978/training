<?php
class Person
    {                                                                     
            public $name;       
            public $class;                                                                       
         function __construct($name)
        {     
            $this->name = $name;
            $this->class =$class;
        }
          function __destruct()
          {
             echo "My name is{$this->name}";
          }
    }      
       $person = new Person("Reetu");
       
    
?>
