<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-autoType2.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
    <h1>garage zoek op type</h1>
    <p>
        Op type gegevens zoeken uit de tabel klanten van de database garage
    </p>
    <?php

    // klantid uit het formulier halen
    $autotype= $_POST['autotype'];

    //klantgegevens uit e tabel halen
    require_once  "gar-connect.php";

    $sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto
                      WHERE autotype = :autotype");
    $sql->execute(["autotype" => $autotype]);

    //klantgegevens laten zien
    echo"<table class=\"striped\">
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
    <div class="form row">
    <form action="gar-zoek-autoType3.php" method="post">
        Wilt u de klantgegevens zien? Zoek hier op klantid

        <div class="input-field col s12">
        <label for="klantidvak"></label>
        <input type="text" name="klantidvak" id="klantidvak" class="col s12"> <br>
        </div>
        <br>
        <input type="submit" class="btn waves-effect waves-light">
    </form>
    </div>
</div>
</body>
</html>