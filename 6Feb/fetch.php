<?php
$conn = mysqli_connect("localhost", "root", "1234" ,"users");
	if(!$conn)
	{
	echo "Not connected with database";
	}
	$query = mysqli_query($conn ,"select * from user_emps");


    while ($row = mysqli_fetch_array($query))
    {
		// echo
		echo "ID: ". $row['id'] ."<br>Name: " .$row['Name'] ."<br>" ."Class: " .$row['Class']."<br>Email: " .$row['Email']."<br>Address: ". $row['address']."<br>";
		echo "<br />";
	}
?>