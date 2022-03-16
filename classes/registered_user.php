<?php

class Registered_user {
    
    public $name;
    public $email;
    public $discount=0;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

  

    
}    