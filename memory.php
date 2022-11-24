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
            <link rel="stylesheet" href="assets/css/memory.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <script src="assets/JavaScript/chat.js"></script>
            <title>Memory</title>
        </head>
        <body>
            <?php
                    
                // Importation du header

                require_once 'view/header.inc.php';
                    
                // Fin Importation du header

            ?>

            <div id="titreMemory">
                <h2>MEMORY</h2>
            </div>
            <!--Niveaux de difficulté-->
            <div class="leJeu">
                <div class="lesDifficultes">
                    <a href="" class="lesDifficultes2">Facile</a>
                    <a href="" class="lesDifficultes2">Intermédiaire</a>
                    <a href="" class="lesDifficultes2">Expert</a>
                    <a href="" class="lesDifficultes2">Impossible</a>
                </div>
                <!--Cases du tableau-->
                <div class="lesTableaux">
                    <table class="tableau1">
                        <tr>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                    </table>
                    <table class="tableau2">
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                    </table>
                    <table class="tableau3">
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                        </tr>
                    </table>
                    <table class="tableau4">
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                        <tr>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                            <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Importation du footer -->

            <?php

                require_once 'view/footer.inc.php';
            
            ?>

            <!-- Fin Importation du footer -->

            <!-- Bouton du Chat -->
            <div id="chatBody">
                <?php
                    include "chat.php";
                ?>
            </div>
            <div id="boutonChat" onclick="showChat()">
                <i class="fa-solid fa-message"></i>
            </div>
        </body>
    </html>