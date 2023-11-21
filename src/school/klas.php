<?php

namespace School;
use School\docent;
use School\student;


class klas {

    public object $docent;
    public array $studenten;

    public function __construct()
    {
        $this->docent = new docent("Maciej", "26345", "wachtwoord");

        $this->studenten["Roney"] = new student("Roney", '0612345679', "hallo", "12345");
        $this->studenten["Dylan"] = new student("Dylan", '0612343078', "hey", "17945");
        $this->studenten["Arda"] = new student("Arda", '0682341178', "wachtwoord", "43345");
        $this->studenten["Mika"] = new student("Mika", '0617745678', "wachtwoord1", "26345");
    }

    public function getstudenten() {
        $data = "<br>";
        foreach ($this->studenten as $student) {
                $data = "$data " . $student->getnaam();
                $data = "$data " . $student->studentnummer;
                $data = "$data " . $student->telefoonnummer . "<br>";
        }
        return $data;
    }
}

?>