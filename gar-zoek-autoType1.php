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
    <h1>auto zoeken op type</h1>
    <p>
        Dit formulier zoekt een auto op uit de tabel auto van de database garage
    </p>

    <form action="gar-zoek-autoType2.php" method="post">
        Welke auto zoekt u? Voer de type auto in

        <label for="autoype"></label>
        <input type="text" name="autotype" id="autoype"> <br>

        <input type="submit" class="btn waves-effect waves-light">
    </form>
</div>
</body>
</html>