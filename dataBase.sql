/*STORY 2*/
INSERT INTO utilisateur (email, password, name, dateSignUp)
VALUES ("jm@gmail.com", "ABCD", "PapyBruh", "2022-10-10");




/*STORY 3-1*/

UPDATE utilisateur
SET password = "new password"
WHERE id = 1;

/*STORY 3-2*/
UPDATE utilisateur
SET email = "jm2@gmail.com"
WHERE id = 1 AND password = "new password";




/*STORY 4*/
SELECT * FROM utilisateur WHERE email = "jm2@gmail.com" AND password = "new password";



/*STORY 5*/
INSERT INTO jeu (gameName)
VALUES ("The Power Of Memory");



/*STORY 6*/
SELECT gameName, name, difficulty, gameScore
FROM jeu INNER JOIN score INNER JOIN utilisateur
ON score.idGame = jeu.id AND score.idPlayer = utilisateur.id
ORDER BY jeu.gameName, score.difficulty, score.gameScore;




/*STORY 7  */
SELECT gameName, name, difficulty, gameScore
FROM jeu INNER JOIN score INNER JOIN utilisateur
ON score.idGame = jeu.id AND score.idPlayer = utilisateur.id
ORDER BY jeu.gameName; /*ou on peut mettre score.difficulty; ou score.gameScore;*/


/*DTORY 8*/



/*STORY 10*/
SELECT message.message,message.idExpediteur, message.dateMessage
FROM message
WHERE message.dateMessage >= NOW() - INTERVAL 1 DAY;