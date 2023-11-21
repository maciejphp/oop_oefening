<?php

namespace School;

class student extends persoon {

    public string $studentnummer;

    public function __construct($naam, $telefoonnummer, $password, $studentnummer)
    {
        parent::__construct($naam, $telefoonnummer, $password);
        $this->studentnummer = $studentnummer;
    }

    public function login($password): void
    {
        if ($password === $password) {
            echo "Ingelogt met student " . parent::getnaam();
        }else {
            echo "Invalide wachtwoord \n";
        }
    }
}

?>