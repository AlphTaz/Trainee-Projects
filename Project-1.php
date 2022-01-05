<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youou</title>
</head>
<body>

<?php 
  require "./Class/Form.php";

  $formulaire = new Form ($_POST)
    ?>


<main>
       <div class="login">
            <h2 style="text-align:center"> Home </h2>
           
         <form action="#" method="post">

            <?php

            $formulaire->createInput('nom','form');
            $formulaire->createInput('prenom','form');
          
            ?>

          

            <a class="mdp" href="#!"> <strong>Mot de passe oublié ?</strong></a>

            <hr />

            <?php 
            $formulaire->createSubmit('envoi','btn');
            ?>
            
            </form>
        
        </div>

       
</main>

<br>
<p>
    <?php
      
      // var_dump($_POST);
      // echo($_POST['nom']);
      // echo($_POST['prenom']);

      
      echo (empty($_POST['nom']) && empty($_POST['prenom'])) ? 'Veuillez vous connecter' :
    
       'Bienvenue ' . $_POST['nom'] . $_POST['prenom'] . '</br>' .'Vous êtes maintenant connecté';
      

      ?>

</p>
    
    
</body>
</html>