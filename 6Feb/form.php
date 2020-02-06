<?php
//This program send the data in database

if (isset($_POST['submit']))
{
	//Create connection
  	$conn = mysqli_connect("localhost", "root", "1234" ,"users");
	if(!$conn)
	{
	echo "Not connected with database";
	}

		$name=$_POST['name'];
		$class=$_POST['class'];
		$email=$_POST['email'];
		$address=$_POST['address'];	

	$sql="INSERT INTO user_emps(Name, Class, Email, address) VALUES('$name','$class','$email','$address')";//Command to insert data

	//Check the condition is true
	if ($conn->query($sql) === TRUE) 
	{
    	echo "New record created successfully";
	}
 	else
 	{
   		 echo "Error: " . $sql . "<br>" . $conn->error;
 	}
echo header("Location: fetch.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<!-- Create a form  -->
	<form action="#" method="post">
		<center>
	<label>Name:</label>	
	    <input type="text" name="name"  placeholder="Enter your name"><br><br>
	<label>Class:</label>	
	    <input type="text" name="class"  placeholder="Enter your class"><br><br>
	<label>Email:</label>	
		<input type="text" name="email"  placeholder="Enter your email"><br><br>
	<label>Address:</label>		
	    <input type="text" name="address"  placeholder="Enter your address"><br><br>
	<input type="submit" name="submit">	
		</center>  
	</form>

</body>
</html>