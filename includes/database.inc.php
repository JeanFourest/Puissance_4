<?php
//On se connecte a la base de donnee
try{

$BDD = new PDO(
    'mysql:host=localhost:8889;dbname=memorygame;charset=utf8',
    'root',
    'root'
);
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


// On récupère tout le contenu de la table
$sqlQuery = 'SELECT * FROM jeu';
$statement = $BDD->prepare($sqlQuery);
$statement->execute();
$resultats = $statement->fetchAll();

// On affiche les requetes ici
foreach ($resultats as $resultat) {
?>
    <p><?php echo $resultat['gameName']; ?></p>
<?php
}
?>