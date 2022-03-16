<?php

require_once __DIR__ . '/classes/registered_user.php';
require_once __DIR__ . '/classes/user.php';

$utente = new User('Mario',40);
$utenteRegistrato = new Registered_user('pippo', 'pippo@.it');
var_dump($utente);
var_dump($utenteRegistrato);