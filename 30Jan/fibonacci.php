<?php
//This program is based upon fibonacci

function fibonacci($nu)
{

	$num=0;
    $num1=1;
	$count=0;
		while ($count<$nu)
	 	{
	 		echo ' '.$num;
	 		$num2=$num+$num1;
     		$num=$num1;
     		$num1=$num2;
     		$count= $count +1;	
		}
  
}
fibonacci(10);
?>