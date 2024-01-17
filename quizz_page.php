<?php 
// QUESTIONS
require_once "./settings/connexion.php";
//Je demmande la question 1
$idQuestion = 1;

$preparedRequest = $connexion->prepare(
    "SELECT * FROM `question` WHERE id = ? ORDER BY RAND() LIMIT 1"
);

$preparedRequest->execute(array($idQuestion));

$questions = $preparedRequest->fetch(PDO::FETCH_ASSOC);
?>


<!-- REPONSES -->
<?php 
//Je séléctionne les réponses de la question donnée
    require_once "./settings/connexion.php";
    $preparedRequest = $connexion->prepare("SELECT * FROM answer WHERE question_id = ?"
    );

$preparedRequest->execute(array($questions["id"]));

$answer = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);


/*  IL FAUT ECRIRE UNE REQUETE QUI DONNE LA LISTE DES QUESTIONS AUXQUELLES L UTILISATEUR N A PAS ENCORE REPONDU */

/* ENSUITE, IL FAUT EN CHOISIR UNE AU HASARD  */

/* ENSUITE, IL FAUT RECUPERER LA LISTE DES REPONSES POSSIBLES DE CETTE QUESTION  */


/* ENSUITE, IL FAUT AFFICHER L IMAGE DE LA QUESTION ET LES REPONSES POSSIBLES  */


/* ENSUITE, QUAND ON CLIQUE SUR UNE REPONSE IL FAUT VERIFIER SI ELLE EST JUSTE OU PAS ET ENREGISTRER LE CHOIX DANS LA BASE DE DONNEES  */


/* ENSUITE, IL FAUT ACTUALISER LA PAGE POUR CHARGER UNE AUTRE QUESTION, S IL N Y A PLUS DE QUESTION, REDIRECTION SUR PAGE DES SCORES  */
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style_question.css">
    <title>QUIZZ</title>
</head>
<body>
   
 <div class="anim">
    <h1 class="TitreQuizz">PAGE QUIZZ</h1>
</div>
    <a href="./index.php">Accueil</a>


    <div class="container">
        <div class="row">
            

            <div class="col imageVoiture">
                    
            </div>

            <div class="col">
                <div class="question"><?=$questions["questions"]?></div>
                <?php
                //foreach de $answer
                ?>
                <div class="reponse"></div>
                <div class="reponse"></div>
                <div class="reponse"></div>
                <div class="reponse"></div>
            </div>


        </div>
    </div>



</body>
</html>






