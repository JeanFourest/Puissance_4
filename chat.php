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
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="nameUser">Moi</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="messageEnvoye">Hello</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td id="date">Aujourd'hui à 19h22</td>
                </tr>
                <tr>
                    <td></td>
                    <td id="nameUser">Arthur</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="assets/Images/pdpChat.png" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td class="messageRecu" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sapiente cum, ducimus ipsam itaque adipisci animi omnis obcaecati error praesentium in culpa consequatur sed harum inventore vitae incidunt, alias quo!</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="date">Aujourd'hui à 19h36</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="nameUser">Arthur</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="assets/Images/pdpChat.png" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td class="messageRecu" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="date">Aujourd'hui à 19h38</td>
                    <td></td>
                </tr>              
            </table>
        </div>

        <!-- Le footer de la fenêtre de Chat-->
        <div class="footer">
            <form>
                <input type="text" name="" placeholder="Votre message..." class="input">
                <button>Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>