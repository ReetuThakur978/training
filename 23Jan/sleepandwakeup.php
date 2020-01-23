<?php
// class Sleepy {
//     public $tableName;
//     public $tableFields;
//     public $dbConnection;

   
//     public function __sleep()
//     {
        
//         return ['tableName', 'tableFields'];
//     }

   
//     public function __wakeup()
//     {
        
//         $this->dbConnection = DB::connect();
//     }
// }
?>
<?php

class DBConnection{

private $host, $user, $password,$link,$db;

public function __construct($host, $user, $password,$db)

{

$this->host=$host;

$this->user=$user;

$this->password=$password;

$this->db=$db;

$this->connect();

}

private function connect()

{

$this->link=mysql_connect($this->host,$this->user,$this->password);

mysql_select_db($this->db,$this->link);

if(! $this->link)die("Could not connect").mysql_error();

else echo"Connected<br/>";

}

function __sleep()

{

return array($host,$user,$password,$db);

}

function __wakeup()

{

$this->connect();

}

}

$var=new DBConnection("localhost","root","","ajax");

$var->__wakeup();

?>