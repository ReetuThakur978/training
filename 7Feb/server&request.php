
<!DOCTYPE html>
<html>
<body>
<!-- create form  -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br><br>
  Class: <input type="text" name="class"><br><br>
  Address: <input type="text" name="address"><br><br>
  
  <input type="submit"><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $name = $_REQUEST['fname'];
    $class= $_REQUEST['class'];
    $address=$_REQUEST['address'];
    if (empty($name))
    {
        echo "Empty fields! Please fill the details";
    } 
    else 
    {
        echo "Details you field:-   <br>" ;
        echo "Name: ".$name."<br>";
        echo "Class: ".$class. "<br>";
        echo "Address: ".$address. "<br>";
    }
}
echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
?>

