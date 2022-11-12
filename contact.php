<!-- Lien vers le BDD du fichier database.inc.php -->

<?php
session_start();
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
            <link rel="stylesheet" href="assets/css/contact.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Contact</title>
        </head>
        <body>

            <?php
                    
                // Importation du header

                require_once 'view/header.inc.php';
                    
                // Fin Importation du header

            ?>

            <div class="texteContacter">
                <h2>NOUS CONTACTER</h2>
            </div>
            <!--Main-->
            <div class="contacter">
                <div class="boite">
                    <div class="boite2">
                        <i class="fa-solid fa-phone fa-2xl"></i>
                        <p class="paraBoite">06 05 04 03 02</p>
                    </div>
                    <div class="boite2">
                        <i class="fa-solid fa-envelope fa-2xl"></i>
                        <p class="paraBoite">support@powerofmemory.com</p>
                    </div>
                    <div class="boite2">
                        <i class="fa-solid fa-compass fa-2xl"></i>
                        <p class="paraBoite">Paris</p>
                    </div>
                </div>
            </div>
            <!--Formulaire-->
            <div class="formulaire">
                <form method="POST">
                    <div class="fomulaire2">
                        <input type="text" id="nom" name="nom" placeholder="Nom">
                        <input type="email" id="email" name="email" placeholder="Email"><br>
                        <input type="text" id="sujet" name="sujet" placeholder="Sujet"><br>
                        <textarea name="message" id="message" placeholder="Message"></textarea><br>
                        <input type="submit" id="bouttonformulaire" name="button" value="Envoyer">

                        <?php
                            if(isset($_POST["button"])){
                                $nom = $_POST["nom"];
                                $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                                $sujet = $_POST["sujet"];
                                $message = $_POST["message"];

                                if(strlen($nom))
                                
                            }
                        ?>

                    </div>
                </form>
            </div>


        

            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->

        </body>
    </html>