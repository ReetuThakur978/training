<?php  
$number = 153; 
if($number > 0){
	$flag = armstrongCheck($number); 
	if ($flag){
		echo "Number is armstrong.";
	} else {
    	echo "Number is not armstrong."; 
	}
    	
}else{
	echo "Invaild Number";
} 

function armstrongCheck($number){ 
    $sum = 0;   
    $x = $number;   
    while($x != 0)   
    {   
        $rem = $x % 10;   
        $sum = $sum + $rem*$rem*$rem;   
        $x = $x / 10;   
    }   
      
    // if true then armstrong number 
    if ($number == $sum){
    	return 1;
    } 
         
      
    // not an armstrong number     
    return 0;     
} 