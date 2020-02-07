<?php
// Start the session
session_start();
if (!isset($_SESSION['count']))
{
  $_SESSION['count'] = 1;
}
else
{
  ++$_SESSION['count'];//increase the session in every refresh
}
 
echo $_SESSION['count']. "<br>";

?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set multiple session variables 
$_SESSION["firstname"] = "Reetu";
$_SESSION["lastname"] = "thakur";
$_SESSION["name"]="Deep";

//print the value
echo "My first name: ".$_SESSION["firstname"]. "<br>";
echo "My last name: ".$_SESSION["lastname"]. "<br>";
echo "My name is: ".$_SESSION["name"]. "<br><br>";


echo "Session id:  " .session_id();//Get the session id
// session_destroy();//session destroy



?>

</body>
</html>