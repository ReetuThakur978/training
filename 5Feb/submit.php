<!DOCTYPE html>
<html>
<head>
	<title>form data</title>
</head>
<body>
	<?php
	//Post data with variable 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	//check the condition

if (isset($_POST['submit']))
	{
//Print the Data that get from the another page 
	echo "My name is:  " .$name. "<br>";
	echo "My email id is:  ".$email. "<br>";
	echo "My address is: ".$address. "<br>";
	echo "Gender: " .$gender ."<br>";
}
else
{
	echo "Please fill form ";
}

	?>

</body>
</html>