<?php  
// PHP program for insertion sort 
  
// Function to sort an array 
// using insertion sort 
function insertionSort($arr, $n) 
{ 
    for ($i = 1; $i < $n; $i++) 
    { 
       echo "Key :: ". $key = $arr[$i]; echo "<br>";
       echo "j :: ". $j = $i-1; echo "<br>";
      echo $arr[$j];echo "<br>";
        
        while ($j >= 0 && $arr[$j] > $key) 
        { 
            $arr[$j + 1] = $arr[$j]; 
            $j = $j - 1; 
        } 
          
        $arr[$j + 1] = $key; 
        echo $arr[$j + 1]."<br>";
        echo "---------------------"."<br>";
    } 
    return $arr;
} 
  

function printArray($arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 
  
// Driver Code 
$arr = array(12,13, 11, 5, 6); 
$n = sizeof($arr); 
printArray($arr, $n);echo "<br>";
$r = insertionSort($arr, $n); 
echo "<pre>";print_r($r);
printArray($r, $n); 
?> 