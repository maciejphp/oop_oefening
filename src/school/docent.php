<?php

namespace School;

class Docent extends Persoon {

    public function __construct($naam, $telefoonnummer, $password)
    {
        parent::__construct($naam, $telefoonnummer, $password);
    }

    public function login($password): bool
    {
        if ($this->password === $password) {
            return true;
        }else {
            return false;
        }
    }
}


?>