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
            <link rel="stylesheet" href="assets/css/login.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Connexion</title>
        </head>
        <body>

            <?php

                // Importation du header

                require_once 'view/header.inc.php';

                // Fin Importation du header

            ?>

            <!--Image liée avec la class texteConnexion dans le main.css-->
            <div id="titreConnexion">
                <h2>CONNEXION</h2>
            </div>
            <!--Formulaire-->
            <div class="connexion">
                <form method="POST">
                    <div class="connexion2">
                        <input type="email" id="email" name="email" placeholder="Email" size="70"><br>
                        <input type="password" id="mdp" name="mdp" placeholder="Mot De Passe" size="70"><br>
                        <input type="submit" id="bouttonConnexion" name="submit" value="Connexion">
                    </div>
                </form>
                
                <?php
                    //la verifications des informations saisie par l'utilisateur
                    if(isset($_POST["submit"])){

                        //mes variables qui contiennent mes informations $_POST
                        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                        $motDePasse = $_POST["mdp"];
                        
                        //verifie si le mot de passe saisie est egale ou superieure a 8 charateres et verifie aussi si le mail saisie est un vrai
                        if(strlen($motDePasse) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL)){
                            
                            //prepare les commandes pour l'etape suivant
                            $demande = $conn->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
                            $demande->bindParam(1, $email);
                            $demande->bindParam(2, $motDePasse);
                            $demande->execute();

                            //enregistre l'id de l'utilisateur dans $_SESSION
                            if($row = $demande->fetch()){
                                $_SESSION["user_id"] = $row["id"];
                                
                            } else{
                                //en cas d'erreur on envoie un message a l'utilisateur
                                ?>
                                <p>Email ou mot de passe invalide</p>
                                <?php
                            }

                            
                        }else{

                            //en cas d'erreur on envoie un message a l'utilisateur
                            ?>
                            <p>Email ou mot de passe invalide</p>
                            <?php
                        }
                    }
                ?>
                    
            </div>
            
            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->                
        </body>
    </html>