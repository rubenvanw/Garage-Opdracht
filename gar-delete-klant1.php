<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-klant1.php</title>
</head>
<body>
<h1>garage delete klant 1</h1>
<p>
    Dit formulier zoekt een klant op uit de tabel klanten van database garage om hem te kunnen verwijderen
</p>
<form action="gar-delete-klant2.php" method="post">
    Welk klantid wilt u verwijderen?

    <label for="klantid"></label>
    <input type="text" id="klantid" name="klantid"> <br>
    <input type="submit">
</form>
</body>
</html>