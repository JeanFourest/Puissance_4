/*STORY 2 creation de compte*/
INSERT INTO utilisateur (email, password, name, dateSignUp)
VALUES ("jm@gmail.com", "ABCD", "PapyBruh", "2022-10-10");




/*STORY 3 modifier le mot de passe et le mail*/

UPDATE utilisateur
SET password = "new password"
WHERE id = 1;

UPDATE utilisateur
SET email = "jm2@gmail.com"
WHERE id = 1 AND password = "new password";




/*STORY 4 recherche un utilisateur*/
SELECT * FROM utilisateur WHERE email = "jm2@gmail.com" AND password = "new password";



/*STORY 5 creation de jeu*/
INSERT INTO jeu (gameName)
VALUES ("The Power Of Memory");



/*STORY 6 afficher les scores de mes utilisateurs*/
SELECT gameName, name, difficulty, gameScore
FROM jeu INNER JOIN score INNER JOIN utilisateur
ON score.idGame = jeu.id AND score.idPlayer = utilisateur.id
ORDER BY jeu.gameName, score.difficulty, score.gameScore;




/*STORY 7 afficher les scores de mes utilisateurs avec des filtres*/
SELECT gameName, name, difficulty, gameScore
FROM jeu INNER JOIN score INNER JOIN utilisateur
ON score.idGame = jeu.id AND score.idPlayer = utilisateur.id
ORDER BY jeu.gameName; /*ou on peut mettre score.difficulty; ou score.gameScore;*/


/*STORY 8 si il y a un doublon, il faudra le supprimer*/
UPDATE score 
SET gameScore = "400"
WHERE identifiant = idPlayer

INSERT INTO score (idPlayer, idGame, difficulty, gameScore, dateGame) 
VALUES (1, 1, "Facile", 360, NOW());


/*STORY 9 envoyer un message sur le chat général de mon site*/
INSERT INTO message (idGame,idExpediteur,message)
VALUES (1,1,"just testing")



/*STORY 10 afficher la discussion du chat général PAS COMPLETEMENT FINI*/
SELECT message.message,message.idExpediteur, message.dateMessage
FROM message
WHERE message.dateMessage >= NOW() - INTERVAL 1 DAY;
