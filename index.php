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
    <link rel="stylesheet" href="./style/style_index.css">
    <title>QUIZZ</title>
</head>
    
<body>

            <!-- Titre + FORM Déconnection !-->
    <section>

           <div class="row d-flex justify-content-between">

                <div class="col"></div>

                <div class="text-white col">
                    <h1>Quizz Automobile</h1>  
                </div>

                <div class="col">
                    <form action="#" method="post">
                        <button class="p-3 rounded-md bg-violet-700 m-6 grid" type="submit">Deconnecter</button>
                    </form>
                </div>

            </div>


            <!-- FORMULAIRE PSEUDO ET CONNEXION!-->

            <div class="row formConnexion d-flex align-items-center">
                <div class="col d-flex justify-content-center">

                    <form action="./process/user_connection.php" method="post">

                    <div class="col placehold">
                        <input type="text" name="username" id="username" class="m-6 grid grid-cols-1" placeholder="Pseudo"/>
                    </div>
                        <div class="col ">
                            <button class="btn btn-outline-warning connecter" type="submit">Se connecter</button>                 
                        </div>

                    </form>

                </div>
            </div>
            
            <!-- FIN FORMULAIRE PSEUDO ET CONNEXION!-->

            
                <div>
                    <button class="button-87"><a href="/quizz_page.php">QUIZZ</a></button>
                </div>
    
    </section>
   
    <script src="app.js"></script>

</body>
</html>




                    
                      
             