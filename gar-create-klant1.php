<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant1.php</title>
</head>
<body>
<h1>garage create klant 1</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren
</p>
<form action="gar-create-klant2.php" method="post">

    <label for="klantnaam">Klantnaam: </label>
    <input type="text" name="klantnaam" id="klantnaam">
    <br>
    <label for="klantadres">Klantadres: </label>
    <input type="text" name="klantadres" id="klantadres">
    <br>
    <label for="klantpostcode">klantpostcode</label>
    <input type="text" name="klantpostcode" id="klantpostcode">
    <br>
    <label for="klantplaats">Klantplaats</label>
    <input type="text" name="klantplaats" id="klantplaats">
    <br>
    <input type="submit">

</form>
</body>
</html>
