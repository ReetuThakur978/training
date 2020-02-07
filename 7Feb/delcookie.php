<?php
// set the expiration date
setcookie("user", "Reetu Thakur", time() -10,"/");
?>
<html>
<body>

<?php
echo "Cookie ".$_COOKIE['user']." is deleted.";
?>

</body>
</html>