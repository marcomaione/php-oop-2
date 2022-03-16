<?php

class user {
    
    public $name;
    public $age;
    public $discount=0;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

}    