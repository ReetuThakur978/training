<?php
class Clone
{
    public $name;
    public $lastName;

    
    public function __clone()
    {
        $this->name = "Copy " . $this->name;
        $this->lastName = "Copy " . $this->lastName;
    }
}
$user1 = new Clone();
$user1->name = "Reetu";
$user1->lastName = "Thakur";

$user2 = clone $user1; 

echo $user2->name;     
echo $user2->lastName; 
?>