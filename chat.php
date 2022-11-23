<!-- Lien vers le BDD du fichier database.inc.php -->

<?php
include "includes/database.inc.php";

$id_user = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="assets/css/chat.css">
</head>
<body>
    <!--Fenêtre de Chat-->
    <div class="fenêtreChat">
        <!--Le header de la fenêtre du Chat-->
        <div class="header">
            <img src="assets/Images/pdpChat.png" alt="Photo de profil robot">
            <p>Chat général</p>
        </div>

        <!--L'affichage des messages ainsi que l'écriture et l'envoie des messages-->
        <div class="main">
            <table id="tableau">

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

        $respons = $conn -> prepare('SELECT * FROM message INNER JOIN utilisateur ON message.idExpediteur = utilisateur.id WHERE utilisateur.id = ?');
        $respons -> bindParam(1, $id_user);
        $respons -> execute();
        $discution = $respons -> fetch();

        $respons2 = $conn -> prepare('SELECT * FROM message INNER JOIN utilisateur ON message.idExpediteur = utilisateur.id WHERE utilisateur.id != ?');
        $respons2 -> bindParam(1, $id_user);
        $respons2 -> execute();
        $discution2 = $respons2 -> fetch();

        $respons3 = $conn -> query('SELECT * FROM message INNER JOIN utilisateur ON message.idExpediteur = utilisateur.id');

        while($discution3 = $respons3 -> fetch()){
    ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="nameUser">Moi</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="messageEnvoye"><?= $discution['message']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="date"><?= $discution['dateMessage']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="nameUser"><?= $discution2['name']; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="assets/Images/pdpHywel.jpeg" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td class="messageRecu"><?= $discution2['message']; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="date"><?= $discution2['dateMessage']; ?></td>
                    <td></td>
                </tr>
    <?php
        }
        $respons3 -> closeCursor();
    ?>
            </table>
        </div>

        <!-- Le footer de la fenêtre de Chat-->
        <div class="footer">
            <form method="POST">
                <textarea type="text" name="message" placeholder="Votre message..." id="message"></textarea>
                <button type="submit" name="valider">Envoyer</button>
            </form>

            <section id="messages"></section>
        </div>
    </div>
</body>
</html>