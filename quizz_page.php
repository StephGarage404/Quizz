<?php 

require_once "./settings/connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT * FROM `question`"
);

$preparedRequest->execute();

$questions = $preparedRequest->fetch();

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
             
    <h1>PAGE QUIZZ</h1>
    <a href="./index.php">Accueil</a>


    <div class="container">
        <div class="row">
            <button><a href="./index.php">QUIZZ</a></button>

            <div class="col imageVoiture">
                    
            </div>

            <div class="col">
                <div class="question">TROUVE LE MODÈLE EXACT</div>
                <div class="reponse"></div>
                <div class="reponse"></div>
                <div class="reponse"></div>
                <div class="reponse"></div>
            </div>


        </div>
    </div>



</body>
</html>






