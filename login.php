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
            <link rel="stylesheet" href="assets/login.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Connexion</title>
        </head>
        <body>
            <!--Header avec liens vers les autres pages-->
            <header>
                <div class="navigation">
                    <h3>The power of Memory</h3>
                    <nav>
                        <div class="links_nav">
                            <p><a href="index.html">ACCUEIL</a></p>
                            <p><a href="memory.html">JEU</a></p>
                            <p><a href="scores.html">SCORES</a></p>
                            <p><a href="contact.html">NOUS CONTACTER</a></p>
                        </div>
                    </nav>
                </div>
            </header>
            <!--Image liée avec la class texteConnexion dans le main.css-->
            <div class="texteConnexion">
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
            <!--Informations du footer avec liens -->
            <div class="footer">
                <div>
                    <!--Partie gauche du footer-->
                    <h1>Information</h1>
                    <p class="gris">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
                    <p><span class="footerOrange">Tel :</span><span class="gris"> 06 05 04 03 02</span></p>
                    <p><span class="footerOrange">Email :</span><span class="gris"> support@powerofmemory.com</span></p>
                    <p><span class="footerOrange">Location :</span><span class="gris"> Paris</span></p>
                    <div class="imageLiens">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-google"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                    <p class="copyright">Copyright © 2022 Tous droits réservés</p>
                </div>
                <div>
                    <h1>Power Of Memory</h1>
                    <!-- Partie a droite du footer-->
                    <ul>
                        <li class="footerOrange"><a href=""><span class="gris2"> Jouer ! </span></a></li>
                        <li class="footerOrange"><a href=""><span class="gris2"> Les scores </span></a></li>
                        <li class="footerOrange"><a href=""><span class="gris2"> Nous contacter </span></a></li>
                    </ul>
                </div>
            </div>
        </body>
    </html>