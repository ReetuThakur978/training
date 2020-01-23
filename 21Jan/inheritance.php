<?php
class Fruits
{
	public $name
	public $color
	public function __construct($name, $color) 
	{
      $this->name = $name;
        $this->color = $color; 
    }
      public function intro()
       {
         echo "The name of fruit is {$this->name} and color is {$this->color}"

       }
  }
    class Veg extands Fruits
    {
        public function apple()
        {
            echo "the fruit name is apple";
        }

    }
    $veg= new Veg;
    

}
?>