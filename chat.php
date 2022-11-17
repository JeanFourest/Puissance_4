<!-- Lien vers le BDD du fichier database.inc.php -->


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
                    <td><img src="assets/Images/pdpHywel.jpeg" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td colspan = "" class="messageRecu" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sapiente cum, ducimus ipsam itaque adipisci animi omnis obcaecati error praesentium in culpa consequatur sed harum inventore vitae incidunt, alias quo!</td>
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
                    <td><img src="assets/Images/pdpJean.png" alt="Photo de profil utilisateur" class="pdpUser"></td>
                    <td colspan = "" class="messageRecu" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="date">Aujourd'hui à 19h38</td>
                    <td></td>
                </tr>
                
                <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=memorygame;charset=utf8;', 'root', 'root');

                    $_SESSION["user_id"] = 1;
                    $monID = $_SESSION["user_id"];

                    /*$_SESSION["user_id2"] = 2;
                    $autreID = $_SESSION["user_id2"];

                    //$nomExpediteur = $bdd
    
                    if($monID != 1){
                        $nomExpediteur = $bdd -> prepare('SELECT name FROM utilisateur WHERE id = $autreID');
                        $nomExpediteur -> execute();
                        $wtfVariable = "Premier test";
                        echo "<tr> <td></td> <td id = 'nameUser'>" . $autreID . "</td> <td></td> </tr>";
                        echo "<tr> <td><img src='assets/Images/pdpJean.png' alt='Photo de profil utilisateur' class='pdpUser'></td> <td class='messageRecu'>" . $wtfVariable . "</td> <td></td> </tr>";
                        echo "<tr> <td></td> <td></td> <td></td> </tr>";
                    }
                    else{
                        $wtfVariable2 = "Deuxieme test ";
                        echo "<tr><td></td> <td id = 'nameUser'>" . $monID . "</td> <td class='messageRecu'>" . $wtfVariable2 . "</td> </tr>";
                    }*/
    
                    if(isset($_POST['valider'])){
                        if(!empty($_POST['message'])){
                            $message = nl2br(htmlspecialchars($_POST['message']));

                            $insererMessage = $bdd -> prepare('INSERT INTO message(idGame, idExpediteur, message) VALUES (1, 2, ?)');
                            $insererMessage -> bindParam(1, $message);
                            $insererMessage -> execute();
                        }
                        else{
                            echo "Veuillez écrire un message avant de vouloir l'envoyer !";
                        }
                    }
                ?>
            </table>
        </div>

        <!-- Le footer de la fenêtre de Chat-->
        <div class="footer">
            <form method="POST">
                <textarea type="text" name="message" placeholder="Votre message..." id="message"></textarea>
                <button type="submit" name="valider">Envoyer</button>
            </form>
            <?php
            ?>

            <section id="messages"></section>
        </div>
    </div>
</body>
</html>