<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-autoType3.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
    <h1>garage zoek op klantid</h1>
    <p>
        Op klantid gegevens zoeken uit de tabel klanten van de database garage
    </p>
    <?php

    // klantid uit het formulier halen
    $klantid = $_POST['klantidvak'];

    //klantgegevens uit e tabel halen
    require_once  "gar-connect.php";

    $sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant
                      WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    //klantgegevens laten zien
    echo"<table class=\"striped\">
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

    echo "<a href='index.html'> terug naar het menu </a>" ;

    ?>
</div>

</body>
</html>