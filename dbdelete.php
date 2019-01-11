<?php

$conn = new PDO("mysql:host=127.0.0.1:8889;dbname=project1", "root", "root");

$id=$_POST ['id'];

$sql = "DELETE FROM deelnemers WHERE
        (id= $id) 
        VALUES 
        ('$naam', '$plaats', '$aantal')"; 
echo $sql;

$conn->exec($sql);

$conn = NULL;

?>