<?php
// Class Students
// {
//   function set()
//   {
//   	echo"My fav fruits is:";
//   }

function __autoload($Student) {
   	//echo $Student;
   	//echo $Student.'.php';die;	
	include 'include/'.$Student.'.php';
}

// }
// $obj = new Students;
$a = new Abc();
$a->set_name('Red');

echo $a->get_name();

$b= new Fruits();
$b->set_name('Apple');
echo $b->get_name();   
?>