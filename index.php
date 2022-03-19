<?php

require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/creditCard.php';


$utente = new User('Mario','rossi', 'mario@.it');
$myCreditCard = new CreditCard ();
$myCreditCard->setMeseScadenza('04');
$myCreditCard->setAnnoScadenza('22');
$myCreditCard->setCvv('123');
$myCreditCard->setNumber('4242424242424242');
$myCreditCard->utente = "Mario Rossi";

if ($myCreditCard->isExpired()) {
    $utente->setCreditCard($myCreditCard);
}

var_dump($utente);