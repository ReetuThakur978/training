
<?php
class Person
{
    function example() 
    {
        echo "I am the original function<br>";
    }
}

class Human extends Person
 {
    function example()
    {
        echo "I am the redefined function<br>";
        Person::example();
    }
}

Person::example();
$b = new Human;
$b->example();
?>