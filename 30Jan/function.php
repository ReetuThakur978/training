<?php 
//This program show the strict requirement

declare(strict_types=1);// strict requirement

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5,5); 
echo"<br>";
echo"<br>";
//default function
function set(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}

set(123);
set(123); 
set();//use the default value 50
echo"<br>";
echo"<br>";

//float value
function addNum(float $a, float $b)
{
    return $a + $b;
}
echo addNum(6, 5.2); 
?>