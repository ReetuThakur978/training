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
          function get_name()
          {
        	return $this->name;
          }
    }
       $person = new Person("Reetu");
       echo $person->get_name();
    
        ?>

      