<?php
// This program show the user details
Class Student{
//Variable name
	public $name;
	public $rollnumber;
	public $age;
    public $marks;
    //Constructor

			function __construct($name, $rollnumber)
			{
			     $this->name= $name;
			     $this->rollnumber = $rollnumber;
			     
			}

			function setAge($age){
				$this->age = $age;

			}
			
			function setMarks($marks)
			{
				$this->marks = $marks;
			}
			function display()
			{ 
				return "Name : ".$this->name."<br>"."Age: ".$this->age."<br>"."Roll Number: ".$this->rollnumber."<br>"."Marks : ".$this->marks; 
		
			}

}

$obj = new Student("Reetu Thakur","20");//create object
 
 $obj->setAge('23');
 $obj->setMarks('59');
 echo $obj->display();
?>

