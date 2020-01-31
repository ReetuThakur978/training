<?php
$sort=array(3,6,1,8,6,4);
$temp=0;
for($i=0;$i<count($sort);$i++)
{
	for($j=0; $j<count($sort)-1; $j++)
	{
		if($sort[$i]>$sort[$j+1])
		{
			$temp=$sort[$j];
			$sort[$j]=$sort[$j+1];
			$sort[$j+1]=$temp;
		}
	}
}
echo"sorted array by Bubble sort:  ";
print_r($sort);
?>