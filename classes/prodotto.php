<?php


class Prodotto {
    public $name;
    public $descrizione;

    protected $prezzo = 0;
    protected $animali = [];

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo) {
        if (is_numeric($prezzo) && $prezzo >= 0) {
            $this-> prezzo = $prezzo ;
        }
    }

    public function getAnimali() {
        return $this->animali;
    }

    public function setAnimali($array) {
        if (is_array($array)) {
            $this->animali = $array;
        }
    }
}