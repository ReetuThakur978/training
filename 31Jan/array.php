<?php
$sort = array(1,2,3,4,5,42,33,55);

$arrlength = count($sort);
for($x = 0; $x <$arrlength  ; $x++)
 {
 	if($x<5)
 	{
    echo $sort[$x];
    }   
}
?>