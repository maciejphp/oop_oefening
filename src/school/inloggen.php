<?php



use School\docent;
use School\student;
use School\klas;

require_once __DIR__ . '/../../vendor/autoload.php';

$klas = new klas();

$name = $_POST["name"];
$password = $_POST["password"];

// $name = "Maciej";
// $password = "wachtwoord";

// $name = "Arda";

echo "<h1>$name</h1>";

if (isset($klas->studenten[$name])) {
    echo $klas->studenten[$name]->login($password);
}elseif ($klas->docent->getnaam() == $name) {
    $login = $klas->docent->login($password);

    if ($login) {
        echo "Ingelogt met docent {$klas->docent->getnaam()}";
        $studentenlijst = $klas->getstudenten();
        echo $studentenlijst;

        session_start();
        $_SESSION["html"] = $studentenlijst;
        echo "<br><a href='../pdf.php'><button>download PDF</button></a>";
    }else {
        echo "Invalide wachtwoord";
    }
}else {
    echo "Invalide naam";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><a href="../index.html">terug</a><br>
</body>
</html>