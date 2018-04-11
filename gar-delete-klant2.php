<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant2.php</title>
</head>
<body>
<h1>garage delete klant 2</h1>
<p>
    Op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden
</p>
<?php

// klantid uit het formulier halen
$klantid = $_POST['klantid'];

// klantgegevens uit de tabel halen
require_once "gar-connect.php";

$sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant
                      WHERE klantid = :klantid");
$sql->execute(["klantid" => $klantid]);

// klantgegevens laten zien
echo"<table>
       <thead>
             <tr>
                <th>klantid</th>
                <th>klantnaam</th>
                <th>klantadres</th>
                <th>klantpostcode</th>
                <th>klantplaats</th>
               </tr>
        </thead>
        <tbody>";

foreach ($sql as $rij){
    echo "<tr>
                <td>$rij[klantid]</td>
                <td>$rij[klantnaam]</td>
                <td>$rij[klantadres]</td>
                <td>$rij[klantpostcode]</td>
                <td>$rij[klantplaats]</td>
               
              </tr>";}

?>

<form action="gar-delete-klant3.php" method="post">
    <input type="hidden" name="klantid" <?php echo "value='" . $klantid . " '"?>
    <input type="hidden" name="verwijdervak" value="0">
    <input type="checkbox" name="verwijdervak" value="1">
    Verwijder deze klant
    <input type="submit">
</form>
</body>
</html>