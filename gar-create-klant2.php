<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-create-klant2.php</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="containerTwee">
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tabel klant in de database garage
</p>
<?php
// klant gegevens uit het formulier halen
$klantid = NULL;
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];

//klantgegevens invoeren in de tabel

require_once "gar-connect.php";

$sql = $conn->prepare("INSERT INTO klant VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats )");
$sql->bindParam(":klantid", $klantid);
$sql->bindParam(":klantnaam", $klantnaam);
$sql->bindParam(":klantadres", $klantadres);
$sql->bindParam(":klantpostcode", $klantpostcode);
$sql->bindParam(":klantplaats", $klantplaats);

$sql->execute();

echo "De klant is toegevoed <br>";
echo "<a href='index.html'> terug naar het menu</a>";

?>
</div>
</body>
</html>