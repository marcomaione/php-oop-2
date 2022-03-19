<?php

trait Adress {
    public $number;
    public $address;
    public $zip;
    public $city;

    public function getFullAdress() {
        return $this->address . ' ' . $this->number . ',' . $this->zip . ',' . $this->city;
    }
}