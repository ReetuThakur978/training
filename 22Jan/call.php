<?php
// class Person
//     {                                                                     
//             public $name;       
//             public $class;                                                                       
//          function __call($name)
//         {     
//             $this->name = $name;
//             $this->class =$class;
//         }
          
//     }
//        $person = new Person("Reetu");
//        echo $person;
    
        ?> 
        <?php
    class dog {
        public $Name;

        public function bark() {
            print "Woof!\n";
        }

        // public function meow() {
            // print "Dogs don't meow!\n";
        // }

        public function __call($function, $args) {
            $args = impload(', ', $args);
            print "Call to $function() with args '$args' failed!\n";
        }
    }

    $poppy = new dog;
    $poppy->meow("foo", "bar", "baz");
?>