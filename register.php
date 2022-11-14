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
            <link rel="stylesheet" href="assets/css/register.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Inscription</title>
        </head>
        <body>
            <div class="header_and_main">

                <?php

                    // Importation du header

                    require_once 'view/header.inc.php';

                    // Fin Importation du header

                ?>

                <div id="titreInscription">
                    <h2>INSCRIPTION</h2>
                </div>
                
                <!--Inscription sur le site-->
                <section class="space_out_section">
                    <div class="inscription">
                        <label for="Email"></label>
                        <input type="email" id="Email" name="Email" placeholder="Email" size="100" required class="required_answer">
                    </div>
                    <div class="inscription">
                        <label for="pseudonym"></label>
                        <input type="text" id="Pseudo" name="pseudonym" placeholder="Pseudo" size="100" required class="required_answer">
                    </div>
                    <div class="inscription">
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" size="100" required class="required_answer">
                    </div>
                    <div class="inscription">
                        <label for="confirm_password"></label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe" size="100" required class="required_answer">
                    </div>
                    <div class="inscription" class="submit">
                        <input type="submit" value="Inscription" class="submit">
                    </div>
                </section>
            </div>

            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->

        </body>
    </html>