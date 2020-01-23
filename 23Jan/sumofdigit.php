<?php
/*
 # This file is used to sum of the digit of the number. 
 # Number Could be Negative, Postive , Integer or Decimal. 
*/
if(isset($_POST['sum']) && !empty($_POST['sum'])){
	//Take a variable number with any value you want to check the sum of digits
	$number = $_POST['digits'];
	
	$sum=0; 
	$rem=0;
	//Take a variable to display negative value 
	$is_neg =0;

	//In this condition define the number is less than 0
	if($number < 0)
	{
	   $is_neg = 1;
	   //The abs function is used to convert the negative value into positive value
	   $number = abs($number);
	}


if(strpos($number, '.'))
	//check the value is float
	{
		  $number = str_replace(".", "", $number);
		 
		//if the value is float the using the str_replace function to convert the float value
	}


	for($i=0; $i<= strlen($number); $i++)//strlen function is used to return the length
	{
		$rem = $number%10;//modules the number
		$sum = $sum + $rem;
		$number = $number/10;
	}

	if($is_neg)
	{
	 $sum = -1 * $sum;//Is used to convert the negative value 
	}
	
	echo  "The Sum of digits of the number (".$_POST['digits'].") is : ".$sum;

}

?>
<html>
<head>
	<title>Sum of the digits</title>
</head>
<body>
	<form method="post">
		<label>Enter the Number</label>
		<input type="number" name="digits" placeholder="Enter Number" required step="0.01">
		<br>
		<input type="submit" name="sum" value="Calculate sum of digits">
	</form>
</body>
</html>
