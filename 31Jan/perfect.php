<?php 
$num = 6; 
function PerfectNumber($num) 
{ 
    
    $sum = 0; 
    for ($i = 1; $i < $num; $i++) 
    { 
        if ($num % $i == 0) 
        { 
            $sum = $sum + $i; 
        }       
    } 
      
    // return $sum == $num; 
} 
     
if (PerfectNumber($num)) 
    echo " Perfect Number"; 
else
    echo "Not  Perfect Number"; 
?> 
