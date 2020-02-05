<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<!-- Create a form  -->
	<form action="submit.php" method="post">
		<center>
	<label>Name:</label>	
	    <input type="text" name="name"  placeholder="Enter your name"><br><br>
	<label>Email:</label>	
		<input type="text" name="email"  placeholder="Enter your email"><br><br>
	<label>Address:</label>		
	    <input type="text" name="address"  placeholder="Enter your address"><br><br>
	<label>Gender:</label> 
		<input type="radio" name="gender"  value="Male">Male
		<input type="radio" name="gender"  value="Female">Female
		<br><br> 
	<input type="submit" name="submit">	
		</center>  
	</form>

</body>
</html>