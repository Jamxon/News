<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "news";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$db_username, $db_password);
//    echo "Bazaga ulandi!";
} catch(PDOException $e){
    echo "Bazaga ulana olmadi: " . $e->getMessage();
}