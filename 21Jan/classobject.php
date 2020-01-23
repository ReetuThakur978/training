<?php
class Animal {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$cat = new Animal();
$dog = new Animal();
$cat->set_name('Cat');
$dog->set_name('Dog');

echo $cat->get_name();
echo "<br>";
echo $dog->get_name();
?>
