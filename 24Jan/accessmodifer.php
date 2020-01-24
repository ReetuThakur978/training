<?php
//Access modifier
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; //print
$mango->color = 'Yellow'; 
$mango->weight = '300'; //error
?>