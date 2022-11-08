<?php

try{

$BDD = new PDO(
    'mysql:host=localhost;dbname=memorygame;charset=utf8',
    'root',
    'root'
);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM jeu';
$statement = $BDD->prepare($sqlQuery);
$statement->execute();
$resultats = $statement->fetchAll();

// On affiche chaque recette une à une
foreach ($resultats as $resultat) {
?>
    <p><?php echo $resultat['gameName']; ?></p>
<?php
}
?>