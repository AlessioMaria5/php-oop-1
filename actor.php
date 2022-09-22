<?php 

class Actor {

    public $name , $surname , $age , $role ;

    public function __construct($name, $surname , $age) {

        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    } 

}
?>