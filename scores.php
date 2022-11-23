<!-- Lien vers le BDD du fichier database.inc.php -->

<?php
include "includes/database.inc.php";
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/header.css">
            <link rel="stylesheet" href="assets/css/footer.css">
            <link rel="stylesheet" href="assets/css/scores.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Scores</title>
        </head>
        <body>
            <div class="header_and_main">

                <?php

                    // Importation du header

                    require_once 'view/header.inc.php';

                    // Fin Importation du header

                ?>

                <div id="titreScores">
                    <h2>SCORES</h2>
                </div>
                <table class="score">
                    <tr>
                        <th>Nom du jeu</th>
                        <th>Pseudo</th>
                        <th>Niveau de difficulté</th>
                        <th>Score</th>
                        <th>Date</th>
                    </tr>

                    <?php
                        $demande = $conn->prepare("SELECT jeu.gameName, utilisateur.name, score.difficulty, score.gameScore, score.dateGame
                            FROM jeu INNER JOIN score INNER JOIN utilisateur
                            ON score.idGame = jeu.id AND score.idPlayer = utilisateur.id
                            ORDER BY score.gameScore;"
                        );

                        $demande->execute();
                        
                        $resultats = $demande->fetchAll();

                        foreach($resultats as $row){
                            echo "<tr>" . "<td>" . $row["0"] . "</td>" . "<td>" . $row["1"] . "</td>" . "<td>" . $row["2"] . "</td>" . "<td>" . $row["3"] . "</td>" . "<td>" . $row["4"] . "</td>" . "</tr>";
                        }
                    

                    ?>

                </table>
            </div>

            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->

        </body>
    </html>