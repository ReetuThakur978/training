<?php
//This program show the conditional statement 
$d= date('H');
if($d<10)//if statement
{
	echo "If condition is true";
}
echo"<br>";
//if-else statement
$a=10;
$b=20;
$c=$a+$b;
	if($c<20)
    {
		echo"Hello";
    }
    else
   {
		echo"Hello eveyone";
   }
echo"<br>";
echo"<br>";
//if-else-if statement
$t = date("H");

	if ($t < "10")
	{
    	echo "Good morning!";
	} 
	elseif ($t < "20") 
	{
    	echo "Have a good day!";
	} 
	else 
	{
    	echo "Have a nice day";
	}
	echo"<br>";
    echo"<br>";
    
    //Switch Statement
    $fruits = "Apple";

switch ($fruits) 
{
    case "Banana":
        echo "My fav friuts is Banana";
        break;
    case "Apple":
        echo "My fav friuts is Apple";
        break;
    case "grapes":
        echo "My fav friuts is Grapes";
        break;
    default:
        echo "Nothing is fav";
}
?>