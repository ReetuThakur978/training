<?php
class Test
{
    public function __isset($name) {
        echo "Non-existent property '$name'";
    }
     public function __unset($name) {
        echo "Non-existent property '$name'";
    }  
}

$obj = new Test;
isset($obj->prop);
unset($obj->name);

?>
