<?php

require_once __DIR__ . '/../traits/Address.php';
class user {
    
    use Adress;
    public $nome;
    public $cognome;
    protected $email;
    protected $discount = 0;
    protected $creditCard;

    public function __construct($nome, $cognome,$email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->setEmail($email);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email) {
        if (strpos($email,'@') !== false && strpos($email, '.') !== false) {
            $this->email = $email;
        }else {
            echo "indirizzo email non valido";
        }
    }
    
    public function getDiscount(){
        return $this->discount;
    }

    public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
    }

}    