<?php
session_start();

if (!empty($_POST['username']))
{
    require_once '../settings/connexion.php'; 

    //Prépare la requête SQL qui récupèrera la ligne de la table USER pour laquelle le pseudo est égal à la valeur saisie par l'utilisateur ($_POST['userName'])
    $SQLuniqueUser = $connexion->prepare("SELECT * FROM user WHERE pseudo = ?");
    //  Exécution de la requête sur le serveur SQL
    $SQLuniqueUser->execute([$_POST['username']]);
    //  Récupération du résultat de la requête SQL (la ligne de la table USER correspondant au pseudo saisi)
    $uniqueUser = $SQLuniqueUser->fetch(PDO::FETCH_ASSOC);

    //  Si on a trouvé une ligne avec le pseudo saisi
    if (!empty($uniqueUser['pseudo']))
    {
        //  On "connecte" l'utilisateur en enregistrant son nom et son id dans la session en cours
        $_SESSION['user'] = $uniqueUser['pseudo'];
        
        //  Redirection vers la page du quizz pour l'utilisateur qui se connecte
        header("Location: ../quizz_page.php");
    }
    //  Si on n'a pas trouvé une ligne avec le pseudo saisi
    //      => c'est un nouvel utilisateur
    else
    {
        //  Préparation de la requête SQL
        $preparedRequest = $connexion->prepare(
            "INSERT INTO user (pseudo) VALUES (?)");

        //  Exécution de la requête SQL "insert" en remplaçant le ? par $_POST['userName']
        $preparedRequest->execute([
                $_POST['username']]);

        $_SESSION['user'] = $_POST['username'];

        //  Redirection vers la page du profil de l'utilisateur qui vient d'être créé
        header("location: ../profil_page.php");
    }
}
