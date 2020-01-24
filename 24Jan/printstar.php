<?php
//print star in trangle form 

//Take a variable, write the no. of value you want to print
$n=33;
for($i=1; $i<=$n; $i++)// this loop is used to print rows
{
	$r=1;
	for($j=1; $j<=($n*2)-1; $j++)//this loop is used to print the column
	{
	   if(($j>=($n+1)-$i) && ($j<=($n-1)+$i)&& $r)// this condition help to make star
	   {
	     echo"*";//Print the star
	     $r=0;
	   }
	      else
	      {
	        echo"&nbsp&nbsp";//Print the space between star
	        $r=1;
	      }
	   
	}echo "<br>";
}

?>