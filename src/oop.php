<?php

class persoon {

    private string $naam;
    public string $telefoonnummer;

    public function __construct(string $naam, string $telefoonnummer)
    {
        $this->naam = $naam;
        $this->telefoonnummer = $telefoonnummer;
    }

    public function getnaam(): string
    {
        return $this->naam;
    }
}

class student {

    private string $naam;
    public string $telefoonnummer;
    public string $studentnummer;

    public function __construct(string $naam, string $telefoonnummer, string $studentnummer)
    {
        $this->naam = $naam;
        $this->telefoonnummer = $telefoonnummer;
        $this->studentnummer = $studentnummer;
    }

    public function getnaam(): string
    {
        return $this->naam;
    }

    public function login(): void
    {
        echo "Ingelogt met $this->studentnummer \n";
    }
}

// $studenten[] = new student("Roney", '0612345678', "12345");
// $studenten[] = new persoon("nick", '0687654321');


// if (method_exists($studenten[0], "login")) {
//     $studenten[0]->login();
// }

// if (method_exists($studenten[1], "login")) {
//     $studenten[0]->login();
// }

for ($i = 0; $i < 10; $i++) {

    if (random_int(0,1) === 0) {
        $studenten[] = new student("Roney", '0612345678', "12345");
    }else {
        $studenten[] = new persoon("nick", '0687654321');
    }
}

echo "<pre>";
var_dump($studenten);
echo "</pre>";

?>