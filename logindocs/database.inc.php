<?php
//on utilisera ce fichier pour include toute les autres page
//On se connecte a la base de donnee
$servername = "localhost";
$dbname = "memoryGame";
$username = "root";
$password = "root";


try{
$conn = new PDO("mysql:host=$servername:8889;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}
catch(PDOException $e){
  echo "connexion erreur: " . $e->getMessage();
}
?>