<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-auto1.php</title>
</head>
<body>
<h1>garage zoek op klantid</h1>
<p>
    Dit formulier zoekt een auto op uit de tabel auto van de database garage
</p>

<form action="gar-zoek-auto2.php" method="post">
    Welke auto zoekt u? Voer het autokenteken in

    <label for="autokenteken"></label>
    <input type="text" name="autokenteken" id="autokenteken"> <br>

    <input type="submit">
</form>
</body>
</html>