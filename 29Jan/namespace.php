<?php 
//This program solve the namespace problem
namespace ab;

include "namespace1.php";
include "namespace2.php";

use a;
use b;

a\Fruits::hello();
echo "<br>";
echo "<br>";
b\Veg::hello();

?> 