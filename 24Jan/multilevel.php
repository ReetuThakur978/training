<?php
//This is multilevel program

class a//parent class
{
public function function_a(){
echo "Hello";
}
}

class b extends a//child class
{
public function function_b(){
echo "hey";
}
}

class c extends b// another child class
{
public function function_c(){
echo "hey..";
}
}

echo c::function_c();
echo c::function_b();
echo c::function_a();

?>