<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1>garage update klant 2</h1>
<p>
    Dit formulier wordt gebruikt om de autogegevens te wijzigen in de tabel auto van de database garage
</p>
<?php

// klantid uit hwt formulier halen
$autokenteken = $_POST['autokenteken'];

//klantgegevens uit de tabel halen
require_once "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto 
                                WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

//klantgegevens in een nieuw formulier laten zien
?>

<form action="gar-update-auto3.php" method="post">

<?php
foreach ($sql as $auto){
    echo "
autokenteken:       <input type=\"hidden\"   name=\"autokenteken\"       value=\"" . $auto['autokenteken']       . "\"><br>
automerk:    <input type=\"text\"   name=\"automerk\"    value=\"" . $auto['automerk']    . "\"><br>
autotype: <input type=\"text\"   name=\"autotype\" value=\"" . $auto['autotype'] . "\"><br>
autokmstand:       <input type=\"text\"   name=\"autokmstand\"       value=\"" . $auto['autokmstand']       . "\"><br>
<input type=\"submit\">
";
}

?>

</body>
</html>

