<?php 
//This program show the loop
$x = 0; 
while($x<=5) //While loop
{
    echo "The number is: $x <br>";
    $x++;
} 
echo"<br>";

$abc = 1; 

do //Do while loop
{
    echo "The number is: $x <br>";
    $abc++;
} while ($abc <= 5);

echo"<br>";
for ($x = 0; $x <= 10; $x++) //for loop
{
    echo "The number is: $x <br>";
} 

$colors = array("red", "green", "blue", "yellow"); 

echo"<br>";
foreach ($colors as $value)//foreach loop
{
  echo "$value <br>";
}
?>