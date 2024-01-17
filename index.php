<?php
    session_start();
    include './settings/superglobale-verif.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>QUIZZ</title>
</head>
    
<body>

    <button><a href="/quizz_page.php">QUIZZ</a></button>


    <div id="quizz-container">
        <h1>Quizz Automobile</h1>  
    </div>
    
    <button type="submit" id="submit-button">Se connecter</button>
    

    <div id="question-container">

        <img id="car-image" src="./images/Background/Accueil.jpg" alt="Car Image">
        <p id="question-text"></p>                         
    </div>
        
    <div id="options-container">

        <form action="./process/user_connection.php" method="post">

            <input type="text" name="username" id="username" autocomplete="username"
                    class="m-6 grid grid-cols-1" placeholder="Pseudo"/>

            <button class="p-3 rounded-md bg-violet-700 m-6 grid" type="submit">envoyer</button>

        </form>
    </div>  
                
   
    <script src="app.js"></script>

</body>
</html>




                    
                      
             