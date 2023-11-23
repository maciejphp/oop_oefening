<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<?php
use School\klas;

require_once __DIR__ . '/../vendor/autoload.php';

$klas = new klas();

$name = $_POST["name"];
$password = $_POST["password"];


echo "<h1>$name</h1>";

if (isset($klas->studenten[$name])) {
    echo $klas->studenten[$name]->login($password);
}elseif ($klas->docent->getnaam() == $name) {
    $login = $klas->docent->login($password);

    if ($login) {
        //render studendenlijst
        echo "Ingelogt met docent {$klas->docent->getnaam()}";
        $studentenlijst = $klas->getstudenten();
        echo $studentenlijst;

        //render pdf btn
        session_start();
        $_SESSION["html"] = $studentenlijst;
        echo "<br><a href='pdf.php'><button>download PDF</button></a>";
    }else {
        echo "Invalide wachtwoord";
    }
}else {
    echo "Invalide naam";
}
?>
    <br><a href="index.html"><button>terug</button></a><br>
</body>
</html>