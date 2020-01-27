<?php
//This program is define all variable

//Global variable
$x=5;
$y=5;

//This function contain two variable locally
function Add()
{

    global $a;//Local variable
	global $b;
$a=70;
$b=2;
  global $ab;
}

function Myclass()
{
global $x, $y;//global keyword is help to use the global variable
echo $z=$x+$y;
echo "<br>";
echo "Hello World";//print 
}

function MyTest() 
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];//Globals keyword
} 

//Function call
Add();
echo $ab=$a*$b;
echo "<br>";
   Myclass();
   echo $z;
   echo "<br>";
 MyTest();
echo $y;
?>