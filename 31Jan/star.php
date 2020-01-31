<?php
$n=33;
$n2=$n*2;
$n3=$n+1;
$n4=$n-1;
for($i=1; $i<=$n; $i++)
{
	for($j=1; $j<=$n2; $j++)
	{
		if($j>=$n3-$i && $j<=$n4+$i)
		{
			echo"*";
		}
		else
		{
			echo "&nbsp&nbsp";

		}

	}
	echo"<br>";
}
?>