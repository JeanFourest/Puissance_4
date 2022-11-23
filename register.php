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
                    <form method="POST">
                        <div class="inscription">
                            <label for="Email"></label>
                            <input type="email" id="Email" name="Email" placeholder="Email" size="100" required class="required_answer">
                        </div>
                        <div class="inscription">
                            <label for="pseudonym"></label>
                            <input type="text" id="Pseudo" name="pseudonym" placeholder="Pseudo" size="100" required class="required_answer">
                        </div>
                        <div class="inscription">
                        <script src="assets/JavaScript/password.js"></script>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" size="100" required class="required_answer" onkeyup="return passwordChanged();">
                        <span id="strength"></span>
                        </div>
                        <div class="inscription">
                            <label for="confirm_password"></label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe" size="100" required class="required_answer">
                        </div>
                        <div class="inscription" class="submit">
                            <input type="submit" value="Inscription" name="submit" class="submit">
                        </div>
                    </form>
                </section>
            </div>

            <?php

            //la verifications des informations saisie par l'utilisateur
                    if(isset($_POST["submit"])){

                        //mes variables qui contiennent mes informations $_POST
                        $pseudo = $_POST["pseudonym"];
                        $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
                        $motDePasse = $_POST["password"];
                        $verifyMDP = $_POST["confirm_password"];

                        //verifie si le mot de passe saisie est egale ou superieure a 8 charateres et verifie aussi si le mail saisie est un vrai
                        if(strlen($motDePasse) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL)){

                            if(strlen($pseudo) <= 4) {
                                echo "Le pseudo n'est pas assez long.";
                            } elseif(!preg_match("#[0-9]#", $motDePasse)){
                                echo "Le mot de passe ne contient pas de nombre.";
                            } elseif(!preg_match("#[A-Z]#", $motDePasse)){
                                echo "Le mot de passe ne contient pas de majuscule.";
                            } elseif(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $motDePasse)){
                                echo "Le mot de passe ne contient pas de caractère spécial.";
                            } elseif($motDePasse != $verifyMDP){
                                echo "Les mots de passe ne sont pas similaires.";
                            } else {
                                $pass_hash = password_hash($motDePasse, PASSWORD_DEFAULT);
                                $requeteSql = 'INSERT INTO utilisateur (id, email, password, name, dateSignUp) VALUES (NULL, ?, ?, ?, NOW())';
                                $requeteInscription = $conn -> prepare($requeteSql);
                                $requeteInscription -> execute([$email, $pass_hash, $pseudo]);
                                mail($email, "Bienvenue sur le site !", "null");
                            }

                        } else {
                            echo "Le mot de passe doit avoir 8 caractères.";
                        }


                    }

            ?>

            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->

        </body>
    </html>