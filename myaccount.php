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
            <link rel="stylesheet" href="assets/css/myaccount.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <title>Mon compte</title>
        </head>
        <body>
            <div class="header_and_main">

                <?php

                    // Importation du header

                    require_once 'view/header.inc.php';

                    // Fin Importation du header

                ?>

                <div id="titreAccount">
                    <h2>MON COMPTE</h2>
                </div>
                <!--Changer son adresse email-->
                <section class="space_out_section">
                    <form method="POST">
                        <div class="change_info">
                            <h3>Modifier mon adresse email :</h3>
                            <label for="old_email"></label>
                            <input type="email" id="old_email" name="old_email" placeholder="Ancien email" size="100" required class="required_answer">
                        </div>
                        <div class="change_info">
                            <label for="new_email"></label>
                            <input type="email" id="new_email" name="new_email" placeholder="Nouvel email" size="100" required class="required_answer">
                        </div>
                        <div class="change_info">
                            <label for="password"></label>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" size="100" required class="required_answer">
                        </div>
                        <div class="change_info" class="submit">
                            <input type="submit" value="Changer mon email" name="submit_email" class="submit">
                        </div>
                    </form>
                </section>
                <!--Changer son mot de passe-->
                <section class="space_out_section">
                    <form method="POST">
                        <div class="change_info">
                            <h3>Modifier mon mot de passe :</h3>
                            <label for="email"></label>
                            <input type="email" id="email" name="email" placeholder="Email" size="100" required class="required_answer">
                        </div>
                        <div class="change_info">
                            <label for="old_password"></label>
                            <input type="password" id="old_password" name="old_password" placeholder="Ancien mot de passe" size="100" required class="required_answer">
                        </div>
                        <div class="change_info">
                            <label for="new_password"></label>
                            <input type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe" size="100" required class="required_answer">
                        </div>
                        <div class="change_info">
                            <label for="confirm_password"></label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez le mot de passe" size="100" required class="required_answer">
                        </div>
                        <div class="change_info" class="submit">
                            <input type="submit" value="Changer mon mot de passe" name="submit_password" class="submit">
                        </div>
                    </form>
                </section>
            </div>

            <?php

                //la verifications des informations saisie par l'utilisateur
                if(isset($_POST["submit_email"])){

                    //mes variables qui contiennent mes informations $_POST
                    $old_email = filter_var($_POST["old_email"], FILTER_SANITIZE_EMAIL);
                    $new_email = filter_var($_POST["new_email"], FILTER_SANITIZE_EMAIL);
                    $mdp = $_POST["password"];

                    if(filter_var($old_email, FILTER_VALIDATE_EMAIL) && filter_var($new_email, FILTER_VALIDATE_EMAIL)) {

                        //prepare les commandes pour l'etape suivant
                        $demande = $conn->prepare("SELECT * FROM utilisateur WHERE email = ?");
                        $demande->bindParam(1, $old_email);
                        $demande->execute();
                        $utilisateur = $demande->fetch();

                        if($utilisateur && password_verify($mdp, $utilisateur['password'])) {
                            $requeteSQL = "UPDATE utilisateur SET email = ? WHERE email = '{$old_email}'";
                            $requeteChange = $conn -> prepare($requeteSQL);
                            $requeteChange -> execute([$new_email]);
                        } else {
                            echo "Le mot de passe est incorrect.";
                        }

                    }
                }

                if(isset($_POST["submit_password"])){

                    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                    $old_password = $_POST["old_password"];
                    $new_password = $_POST["new_password"];
                    $confirm_mdp = $_POST["confirm_password"];

                    $request = $conn->prepare("SELECT * FROM utilisateur WHERE email = ?");
                    $request->bindParam(1, $email);
                    $request->execute();
                    $player = $request->fetch();

                    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        if($player && password_verify($old_password, $player['password'])) {
                            if(!preg_match("#[0-9]#", $new_password)){
                                echo "Le mot de passe ne contient pas de nombre.";
                            } elseif(!preg_match("#[A-Z]#", $new_password)){
                                echo "Le mot de passe ne contient pas de majuscule.";
                            } elseif(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $new_password)){
                                echo "Le mot de passe ne contient pas de caractère spécial.";
                            } elseif($new_password != $confirm_mdp){
                                echo "Les mots de passe ne sont pas similaires.";
                            } else {
                                $pass_hash = password_hash($new_password, PASSWORD_DEFAULT);
                                $anotherSQLrequest = "UPDATE utilisateur SET password = ? WHERE email = '{$email}'";
                                $anotherSQLrequestChange = $conn -> prepare($anotherSQLrequest);
                                $anotherSQLrequestChange -> execute([$pass_hash]);
                            }
                        } else {
                            echo "Mot de passe incorrect.";
                        }

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