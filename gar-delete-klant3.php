<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant3.php</title>
</head>
<body>
<h1>garage delete klant 3</h1>
<p>
    Op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden
</p>
<?php

// gegevens uit het formulier halen
$klantid = $_POST['klantid'];
$verwijderen = $_POST['verwijdervak'];

//klantgegevens verwijderen
if($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare(
        "DELETE FROM klant WHERE klantid= :klantid"
    );
    $sql->execute(["klantid" => $klantid]);
    echo "De gegevens zijn verwijderd" . "<br>";
} else {
    echo " De gegevens zijn niet verwijderd" . "<br>";
}

echo "<a href='index.html'>Terug naar het menu</a>";


?>
</body>
</html>