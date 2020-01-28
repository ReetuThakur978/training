<?php
//This program show string functions 


class Manipulation
{
//Variables
 public $string;
 public $lowercase;
 public $replace;
 public $length;
 public $value;
//function declared
	function __construct($string)
	{
		$this->string=$string;
		echo $this->string;
	}

	function lowercase($lowercase)
	{
		 $this->lowercase=strtolower($lowercase);//string lowercase
		
	}
	function replace($oldText, $newText)
	{
		$this->replace= str_replace($oldText,$newText,$this->string);//String replacement
		
	 }
	function length($length)
	{
		$this->length= strlen($this->replace);	//String length
		
	}
	function display()
	{
       return  "String in lowercase: ".$this->lowercase."<br>" ."String replacement: " .$this->replace."<br>" ."String length: " .$this->length;
	}
	
}
$abc="Reetu Thakur";
$obj=new Manipulation($abc);
echo "<br>";
$obj->lowercase($abc);
$obj->replace("Thakur","Sharma");
$obj->length($replace);
echo  $obj->display();





?>