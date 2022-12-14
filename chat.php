<!-- Lien vers le BDD du fichier database.inc.php -->

<?php
$id_user = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/chat.css">
    <title>Chat</title>
</head>
<!--Fenêtre de Chat-->
<div class="fenetreChat">
    <!--Le header de la fenêtre du Chat-->
    <div class="header">
        <img src="assets/Images/pdpChat.png" alt="Photo de profil robot">
        <p>Chat général</p>
    </div>

    <!--L'affichage des messages ainsi que l'écriture et l'envoie des messages-->
    <div class="main">
        <table id="tableau">

    <!-- Partie php qui permet de récupérer le message que l'utilisateur à écrit puis envoyé -->
    <?php
        if(isset($_POST['valider'])){
            if(!empty($_POST['message'])){
                $message = nl2br(htmlspecialchars($_POST['message']));

                $insererMessage = $conn -> prepare('INSERT INTO message(idGame, idExpediteur, message) VALUES (1, ?, ?)');
                $insererMessage -> bindParam(1, $id_user);
                $insererMessage -> bindParam(2, $message);
                $insererMessage -> execute(); 
            }
            else{
                echo "Veuillez écrire un message avant de vouloir l'envoyer !";
            }
        }


        // Boucle permettant d'afficher tous les messages des différents utilisateurs en les différenciant entre bleu et gris
        $respons3 = $conn -> query('SELECT * FROM message INNER JOIN utilisateur ON message.idExpediteur = utilisateur.id WHERE message.dateMessage >= NOW() - INTERVAL 1 DAY ORDER BY message.dateMessage');

        while($discution3 = $respons3 -> fetch()){

            // Condition permettant de vérifier si le message à été écrit par nous, ou par quelqu'un d'autre 
            if ($discution3['idExpediteur'] == $id_user) {
            ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="nameUser" colspan="2">Moi</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="messageEnvoye" colspan="2"><?= $discution3['message']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="date" colspan="2"><?= $discution3['dateMessage']; ?></td>
                </tr>
            <?php
            }
            else{
            ?>
                <tr>
                    <td></td>
                    <td id="nameUser" colspan="2"><?= $discution3['name']; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="assets/Images/pdpHywel.jpeg" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td class="messageRecu" colspan="2"><?= $discution3['message']; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="date" colspan="2"><?= $discution3['dateMessage']; ?></td>
                    <td></td>
                </tr>

        <!-- Partie php permettant de stopper la boucle while une fois que tous les messages sont affichés -->
        <?php
            }
        }
        $respons3 -> closeCursor();
        ?>
        </table>
    </div>

    <!-- Le footer de la fenêtre de Chat-->
    <div class="footerChat">
        <form method="POST">
            <textarea type="text" name="message" placeholder="Votre message..." id="message"></textarea>
            <button type="submit" name="valider">Envoyer</button>
        </form>
        <section id="messages"></section>
    </div>
</div>
</html>