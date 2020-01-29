<?php
//This program show the operators

//class name operation
class Operations
{
 public $value1;
 public $value2;
 

 		public function __construct($value1, $value2)
 		{
 			$this->value1=$value1;
 			$this->value2=$value2;
 		}
 		//addition 
function addition($value3, $value4)
{
	$this->value1=$value3;
	$this->value2=$value4;
	if($this->value1===$this->value2)
	{
		return $this->value1+$this->value2;
		// echo "value3 is equal to value4:  " .$z;
	}
	

}
//subtraction 
function subtract()
{
  if($this->value1>$this->value2)
  {
  return $this->value1-$this->value2;
  	// echo $x;
  }
}
}
$obj= new Operations(30,20);
echo  "value3 is equal to value4:  ".$obj->addition(30,30);
echo "<br>";
echo "<br>";
echo "value1 is grater than to value2:  ".$obj->subtract();
?>