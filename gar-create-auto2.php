<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel auto in de database garage
</p>
<?php
// autogegevens uit het formulier halen
$klantid = NULL;
$autokenteken = $_POST['autokenteken'];
$automerk = $_POST['automerk'];
$autotype = $_POST['autotype'];
$autokmstand = $_POST['autokmstand'];


//autogegevens invoeren in de tabel

require_once "gar-connect.php";

$sql = $conn->prepare("INSERT INTO auto VALUES (:autokenteken, :automerk, :autotype, :autokmstand");
$sql->bindParam(":autokenteken", $autokenteken);
$sql->bindParam(":automerk", $automerk);
$sql->bindParam(":autotype", $autotype);
$sql->bindParam(":autokmstand", $autokmstand);
$sql->bindParam("klantid", $klantid);

$sql->execute();

echo "De auto is toegevoed <br>";
echo "<a href='index.html'> terug naar het menu</a>";

?>
</body>
</html>