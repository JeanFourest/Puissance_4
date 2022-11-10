<?php
session_start();
include "database.inc.php";
?>
<html>
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
                
                $demande = $conn;
                foreach($demande->query("SELECT * FROM utilisateur where id = 1") as $row){
                echo $row['name'] . "<br>";
                $nom = $row['name'];
                echo $nom;
                }
                
            }else{

                //en cas d'erreur on envoie un message a l'utilisateur
                ?>
                <p class="erreur">Email ou mot de passe invalide</p>
                <?php
            }
        }
        ?>
    </div>
</html>