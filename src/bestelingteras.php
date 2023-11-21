<?php

class terras {

    private string $bestelling;

    public function __construct($bestelling)
    {
        $this->bestelling = $bestelling;
    }

    public function showbestelling() {
        return "Tafelnummer: $this->bestelling";
    }
}

$terras = new terras(7);

echo $terras->showbestelling();

?>