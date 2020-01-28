<?php
//This program contain array functions
// An array that represents a possible record 
$a = array(
  array(
    'id' => 1,
    'first_name' => 'Reetu',
    'last_name' => 'Thakur',
  ),
  array(
    'id' => 2,
    'first_name' => 'Radha',
    'last_name' => 'Krishan',
  ),
  array(
    'id' => 3,
    'first_name' => 'Deep',
    'last_name' => 'reet',
  )
);

$last_names = array_column($a, 'last_name');//array_column function 
print_r($last_names);
echo"<br>";
echo"<br>";

$name=array("Deep","Reetu","Radha");
$age=array("23","22","20");
$c=array_combine($name,$age);//array_combine function
print_r($c);

echo"<br>";
echo"<br>";
$name1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$name2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($name1,$name2);//array_diff function 
print_r ($result);
echo"<br>";
echo"<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_diff_assoc($a1,$a2);//array different association
print_r($result);
echo"<br>";
echo"<br>";

$a1=array_fill(3,6,"blue");//fill the array
print_r($a1);

echo"<br>";
echo"<br>";
$a=array("red","green","blue");
array_pop($a);//pop function 
print_r($a);

echo"<br>";
echo"<br>";
$a=array("red","green","blue");
array_shift($a);//shift function 
print_r($a);

echo"<br>";
$a=array("red","green");
array_push($a,"blue","yellow");//push function
print_r($a);
?>