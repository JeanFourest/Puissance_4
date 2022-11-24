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
            <link rel="stylesheet" href="assets/css/memory.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/306ccec929.js" crossorigin="anonymous"></script>
            <script src="assets/JavaScript/memory.js"></script>
            <title>Memory</title>
        </head>
        <body>
            <?php
                    
                // Importation du header

                require_once 'view/header.inc.php';
                    
                // Fin Importation du header

            ?>

            <div id="titreMemory">
                <h2>MEMORY</h2>
            </div>
            <!--Les themes-->
            <div class="leJeu">

                <!-- Le bouton themes -->
                <div id="themeButtonBox">
                    <input type="button" onclick="revealThemes()" id="openThemes" value="themes"/>
                </div>

                <!-- choisir son theme -->
                <div id="lesThemes">
                    <input type="button" class="lesThemes2" id="Theme1" value="Jean"/>
                    <input type="button" class="lesThemes2" id="Theme2" value="Pays"/>
                    <input type="button" class="lesThemes2" id="Theme3" value="Couleurs"/>
                </div>

                <!-- le bouton difficulte -->
                <div id="diffButtonBox">
                    <input type="button" onclick="revealDiff()" id="openDifficultes" value="Difficultes"/>
                </div>

                <!-- choisir sa difficulte -->
                <div id="lesDifficultes">
                    <input type="button" onclick="diff1()" class="lesDifficultes2" id="facile" value="Facile"/>
                    <input type="button" onclick="diff2()" class="lesDifficultes2" id="intermediaire" value="Intermédiaire"/>
                    <input type="button" onclick="diff3()" class="lesDifficultes2" id="expert" value="Expert"/>
                    <input type="button" onclick="diff4()" class="lesDifficultes2" id="impossible" value="Impossible"/>
                </div>

                <!-- le bouton start du jeu -->
                <div id="startButtonBox">
                    <input type="button" onclick="start()" id="start" value="Start">
                </div>

                <p id="chrono" align = "center"><span id="hours">00</span> : <span id="minutes">00</span> : <span id="seconds">00</span> : <span id="mseconds">000</span></p>

                <!--Cases du tableau-->
                <div class="lesTableaux">
                    <table id="tableau1">
                        <?php
                            /*
                            <tr>
                                <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td1"><div class="box1"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            </tr>
                            */

                            $cardId = 0;
                            $cardImg = 0;




                            for($cols1 = 0; $cols1 < 4; $cols1++) {

                                echo "<tr>";
                                    for($rows1 = 0; $rows1 < 4; $rows1++) {
                                        echo '<td class="td1"><div class="box1" id="'.$cardId++.'"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>';
                                    }
                                echo "</tr>";
                            }

                        ?>
                        
                    </table>
                    <table id="tableau2">
                        <?php
                            /*
                            <tr>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td2"><div class="box2"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            </tr>
                            */
                            $cardId = 0;


                            for($cols2 = 0; $cols2 < 8; $cols2++) {
                                echo "<tr>";
                                    for($rows2 = 0; $rows2 < 8; $rows2++) {
                                        echo '<td class="td2"><div class="box2" id="'.$cardId++.'"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>';
                                    }
                                echo "</tr>";
                            }

                        ?>
                    </table>
                    <table id="tableau3">
                        <?php
                            /*
                            <tr>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                                <td class="td3"><div class="box3"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>
                            </tr>
                            */
                            $cardId = 0;


                            for($cols3 = 0; $cols3 < 12; $cols3++) {
                                echo "<tr>";
                                    for($rows3 = 0; $rows3 < 12; $rows3++) {
                                        echo '<td class="td3"><div class="box3" id="'.$cardId++.'"><i class="fa-regular fa-circle-question fa-2xl"></i></div></td>';
                                    }
                                echo "</tr>";
                            }

                        ?>
                        
                    </table>
                    <table id="tableau4">
                        <?php
                        
                        /* <tr>
                            <td class="td4"><div class="box4"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>
                        </tr> */
                        $cardId = 0;

                        
                        for($cols4 = 0; $cols4 < 20; $cols4++) {

                            echo "<tr>";
                                for($rows4 = 0; $rows4 < 20; $rows4++) {
                                    echo '<td class="td4"><div class="box4" id="'.$cardId++.'"><i class="fa-regular fa-circle-question fa-xl"></i></div></td>';
                                }
                            echo "</tr>";
                        }

                        ?>
                        
                    </table>
                </div>
            </div>

            <!-- Importation du footer -->

            <?php

                require_once 'view/footer.inc.php';
            
            ?>

            <!-- Fin Importation du footer -->

            <!-- Bouton du Chat -->
            
            <div id="boutonChat">
                <a href="chat.php"><i class="fa-solid fa-message"></i></a>
            </div>
        </body>
    </html>