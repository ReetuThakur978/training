<?php
class Test
{
    public function __isset($name) 
    {
        echo  $name;
    }
  public function __unset($name) {
        echo "Non-existent property '$name'";
    }  
}

$obj = new Test;

?>