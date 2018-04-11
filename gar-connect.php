<?php
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);
} catch (PDOException $e){
    print $e->getMessage();
    echo "connectie mislukt";
}