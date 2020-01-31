<?php
class Book
{
	public $name;
	public $bookname;
	public $price;
			function __construct($name, $price,$bookname)
			{
			     $this->name= $name;
			     $this->price=$price;
			     $this->bookname = $bookname;
			     
			}
    function getBookName()
    {
     return "Book Name: ".$this->name;   
    }
    
    function getBookPrice()
    {
     return	"Book Price: ".$this->price;
    }
    function printBookName()
    {
    
    	echo " Print Book Name: " .$this->bookname;
    }
   
}
$obj=new Book('PHP', '234', 'PHP Web');
echo $obj->getBookName();
echo"<br>";
$obj->printBookName();
echo"<br>";
echo $obj->getBookPrice();


?>