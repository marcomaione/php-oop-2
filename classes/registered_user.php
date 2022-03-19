<?php

require_once __DIR__ .'/User.php';
class Registered_user extends User {


    private $discount = 20;


    public function setDiscount($discount) {
        if ($number >=0 && $number <= 100) {
            $this->discount = $number;
        }
    
    }
    
}    