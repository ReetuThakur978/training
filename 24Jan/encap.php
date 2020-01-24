<?php

class App {
     private static $user;

     public function User( ) {
          if( $this->user == null ) {
               $this->user = new User();
          }
          return $this->user;
     }

}

class User {
     private $name;

     public function __construct() {
          $this->name = "Reetu Thakur";
     }

     public function GetName() {
          return $this->name;
     }
}

$app = new App();

echo $app->User()->GetName();

?>
