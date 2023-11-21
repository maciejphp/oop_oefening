<?php

namespace School;

class persoon {

    private string $naam;
    public string $telefoonnummer;
    public $password;

    public function __construct(string $naam, string $telefoonnummer, string $password)
    {
        $this->naam = $naam;
        $this->telefoonnummer = $telefoonnummer;
        $this->password = $password;
    }

    public function getnaam(): string
    {
        return $this->naam;
    }
}

?>