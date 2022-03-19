<?php


class CreditCard {

    protected $meseScadenza;
    protected $annoScadenza;
    protected $cvv;
    protected $numeroCarta;
    public $utente;

    public function getMeseScadenza() {

        return $this->meseScadenza;

    }

    public function getAnnoScadenza() {

        return $this->annoScadenza;

    }

    public function getCvv() {

        return $this->cvv;

    }

    public function getNumber() {

        return $this->number;

    }

    public function setMeseScadenza($number) {
        if (is_numeric($number) && $number >=1 && $number <= 12) {
            $this->meseScadenza = $number;
        }
    }

    public function setAnnoScadenza($number) {
        if (is_numeric($number) && $number >=0 && $number <= 99) {
            $this->annoScadenza = $number;
        }
    }

    public function setCvv($cvv) {
        if (is_numeric($cvv) && $cvv >=0 && $cvv <= 999) {
            $this->cvv = $cvv;
        }

    }

    public function setNumber($number) {
        if (is_numeric($number) && strlen($number) == 16) {
            $this->annoScadenza = $number;
        }

    }

    public function isExpired() {
        $expires = DateTime::createFromFormat('m-y', $this->meseScadenza.'-'.$this->annoScadenza);
        $now = new DateTime();

        if ($expires < $now) {
            return true;
        }
        return false;
    }

    

}