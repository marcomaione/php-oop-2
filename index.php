<?php

require_once __DIR__ . '/classes/registered_user.php';
require_once __DIR__ . '/classes/user.php';
require_once __DIR__ . '/classes/giochi.php';
require_once __DIR__ . '/classes/accessori.php';
require_once __DIR__ . '/classes/alimentazione.php';


$utente = new User('Mario',40);
$utenteRegistrato = new Registered_user('pippo', 'pippo@.it');
$game = new Giochi('palla', 'corda', 'peluche');
$accessory = new Accessori('cuccia','guinzaglio','collare');
$powerSupply = new Alimentazione('mangime secco','scatoletta cibo umido','crocchette al pollo secche');

var_dump($utente);
var_dump($utenteRegistrato);
var_dump($game);
var_dump($accessory);
var_dump($powerSupply);