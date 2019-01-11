<?php

$conn = new PDO("mysql:host=127.0.0.1:8889;dbname=project1", "root", "root");

$naam = $_POST['naam'];
$plaats = $_POST['plaats'];
$aantal = $_POST['aantal'];

$sql = "INSERT INTO deelnemers 
        (naam, woonplaats, aantalkopjes) 
        VALUES 
        ('$naam', '$plaats', '$aantal')"; 
echo $sql;

$conn->exec($sql);

$conn = NULL;

?>