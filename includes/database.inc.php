<?php
//on utilisera ce fichier pour include toute les autres page
//On se connecte a la base de donnee
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "memoryGame";

// cree connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>