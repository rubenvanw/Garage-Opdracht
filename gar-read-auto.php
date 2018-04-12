<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-read-auto.php</title>
</head>
<body>
<h1>garage read auto</h1>
<p>
    Dit zijn alle gegevens uit de tabel auto van de database garage
</p>

<?php
// tabel lezen en afdrukken
require_once "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto");
$sql->execute();

echo"<table>
       <thead>
             <tr>
                <th>autokenteken</th>
                <th>automerk</th>
                <th>autotype</th>
                <th>autokmstand</th>
                <th>klantid</th>
               </tr>
        </thead>
        <tbody>";

foreach ($sql as $rij){
    echo "<tr>
                <td>$rij[autokenteken]</td>
                <td>$rij[automerk]</td>
                <td>$rij[autotype]</td>
                <td>$rij[autokmstand]</td>
                <td>$rij[klantid]</td>
               
              </tr>";}

echo "<a href='index.html'> terug naar het menu </a>";
?>
</body>
</html>