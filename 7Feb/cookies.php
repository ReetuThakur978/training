<?php
//This program is used to set the cookies

$cookie_name = "user";
$cookie_value = "Reetu Thakur";
//set cookies
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
	if(!isset($_COOKIE[$cookie_name]))
	{
    	echo "Cookie named '" . $cookie_name . "' is not set!";
	}
 	else 
 	{
 		// print the statement
    	echo "Cookie '" . $cookie_name . "' is set!<br>";
    	echo "Value is: " . $_COOKIE[$cookie_name];
	}

	// session_destroy();
?>

</body>
</html>
