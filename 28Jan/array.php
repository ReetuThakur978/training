<?php
//This program contain all array types

//Variable that contain array values
$students = array("MCA", "BCA", "MBA");
echo "I am student of "  .$students[0]. " class";//print the statement by using array index
echo"<br>";
echo"<br>";
//print by using for loop
$car = array('Volvo', 'BMW', 'Toyota');
$arrlength = count($car);//count the string

for($x = 0; $x < $arrlength; $x++) 
{
    echo $car[$x];
    echo "<br>";
}
echo"<br>";
echo"<br>";

//Associative array
$students = array("MCA" => '20', "BCA" => '40', "MBA" => '25');
echo "We are "  .$students[MCA]. " student in MCA class";//only access key not value
echo"<br>";
echo"<br>";

//foreach loop
$student = array("MCA" => '20', "BCA" => '40', "MBA" => '25');
foreach ($student as $key => $value) 
{
	echo "In " .$value. " we have " .$key. " students."; 
}
echo"<br>";
echo"<br>";
//Multidimensional  array
$student = array
  (
  array("MCA",223,963),
  array("MBA",152,196),
  array("BCA",32,789)
  );
  
echo $student[0][0].": Number: ".$student[0][1].", Number2: ".$student[0][2].".<br>";
echo $student[1][0].": Number: ".$student[1][1].", Number2: ".$student[1][2].".<br>";
echo $student[2][0].": Number: ".$student[2][1].", Number2: ".$student[2][2].".<br>";

?>