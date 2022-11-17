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
            <title>Accueil</title>
            <link rel="stylesheet" href="assets/css/header.css">
            <link rel="stylesheet" href="assets/css/footer.css">
            <link rel="stylesheet" href="assets/css/index.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

            <!--Ajouter les boutons de réseaux sociaux-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <div id="backgroundNaviguation">

                <!-- Importation du header -->

                <?php
                    require_once 'view/header.inc.php';
                ?>

                <!-- Fin Importation du header -->

                <!--Phrase d'accueil du site-->
                <div> 
                    <h1 class="titreAccueil">BIENVENUE DANS <br> NOTRE INCROYABLE JEU!</h1>
                    <p class="accrocheTitre">Venez tester votre mémoire sur ce jeu</p>
                    <div class="blocJouer">
                        <a href="memory.php" class="Jouer"> <div>JOUER !</div> </a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            
            <!--Explications du jeu-->
            <!---Bloc principal contenant tous les blocs images et textes-->
            <div class="blocTextsImages">

                <!--Sous bloc du bloc principal contenant les images-->
                <div class="blocImages">
                    <img src="assets/Images/images1.png" alt="Image de petits écrans" class="imageOrdi">
                    <img src="assets/Images/images2.jpeg" alt="Petit bonhomme s'amusant" id="Images">
                    <img src="assets/Images/images3.jpeg" alt="Image poker" id="Images">
                </div>
                <br>

                <!--Tableau pour les explications du jeu-->
                <table align="center">
                    <tr>
                        <td id="numTexte">01</td>
                        <td id="titreTexte">Lorem ipsum</td>
                        <td id="numTexte">02</td>
                        <td id="titreTexte">Lorem ipsum</td>
                        <td id="numTexte">03</td>
                        <td id="titreTexte">Lorem ipsum</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="paragrapheExplicationJeu"><br>Dolor sit amet consectetur adipisicing elit.<br>Ad, repellendus cumque magni officia<br>deserunt necessitatibus tenetur. Alias<br>pariatur facilis incidunt in dicta dolorem?<br>Corporis magnam esse nobis molestias minima<br>minus!</td>
                        <td></td>
                        <td id="paragrapheExplicationJeu">Dolor sit amet consectetur adipisicing elit.<br>Consequatur saepe voluptas esse<br>voluptatem iusto veritatis rem, pariatur<br>facere eveniet incidunt dolor, velit commodi<br>error. Delectus distinctio at quae quam minima.</td>
                        <td></td>
                        <td id="paragrapheExplicationJeu">Dolor sit amet consectetur adipisicing elit.<br>Sequi fugit, fugiat doloribus blanditiis minus<br>et a consequatur consectetur rem voluptatum<br>asperiores voluptatibus, corrupti id vel veniam<br>animi necessitatibus eveniet? Distinctio.</td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <br>

            <!--Infos données du jeu-->
            <div class="backgroundDonnees">
                <br>
                <br>
                <br>
                <br>
                <div class="blocImageDonnees">
                    <div class="blocJean">
                        <div>
                            <img class="Watchdogs" src="assets/Images/img-donnee.jpeg" alt="Image WatchDogs qui va avec les données">
                        </div>

                        <?php
                            $responsePartiesJouees = $conn -> query('SELECT COUNT(id) FROM score;');
                            $donneePartieJouees = $responsePartiesJouees -> fetch();

                            $responseTempsRecord = $conn -> query('SELECT MIN(gameScore) FROM score;');
                            $donneeTempsRecord = $responseTempsRecord -> fetch();

                            $responseJoueursInscrits = $conn -> query('SELECT COUNT(idPlayer) FROM score;');
                            $donneeJoueursInscrits = $responseJoueursInscrits -> fetch();
                        ?>
                        <div class="allDonnees">
                            <div class="Box1">
                                <div class="Bloc1">
                                    <p id="textBox"><?php echo $donneePartieJouees['COUNT(id)'];?></p>
                                    <p>Parties Jouées</p>
                                </div>
                                <div class="Bloc2">
                                    <p id="textBox"><?php echo $donneeTempsRecord['MIN(gameScore)'];?> sec</p>
                                    <p>Temps Record</p>
                                </div>
                            </div>
                            <div class="Box2">
                                <div class="Bloc3">
                                    <p id="textBox">XXXX</p>
                                    <p>Joueurs Connectés</p>
                                </div>
                                <div class="Bloc4">
                                    <p id="textBox"><?php echo $donneeJoueursInscrits['COUNT(idPlayer)'];?></p>
                                    <p>Joueurs Inscrits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!--Infos sur les Créateurs-->
                <h2 class="team">Notre Équipe</h2>
                <p class="accrocheTeam">Toujours à l'affut de vos moindres questions</p>
                <div class="blocCreateurs">
                    <div id="Createurs">
                        <img src="assets/Images/pdpHywel.jpeg" alt="Photo de profil Hywel" id="Pdp">
                        <p id="nomsTeam">Hywel</p>
                        <p id="textJob">Game Developer</p>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-discord"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                    <div id="Createurs">
                        <img src="assets/Images/pdpJean.png" alt="Photo de profil Jean" id="Pdp">
                        <p id="nomsTeam" >Jean</p>
                        <p id="textJob">Game Developer</p>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-discord"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                    <div id="Createurs">
                        <img src="assets/Images/pdpAlex.jpeg" alt="Photo de profil Alexandre" id="Pdp">
                        <p id="nomsTeam">Alexandre</p>
                        <p id="textJob">Game Developer</p>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-discord"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Importation du footer -->

            <?php
                require_once 'view/footer.inc.php';
            ?>

            <!-- Fin Importation du footer -->

        </body>
    </html>