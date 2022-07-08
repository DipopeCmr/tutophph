<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tuto php</title>
</head>
<body>
   <h1 class="titre">Entrer votre mot de passe</h1>

   <form  method="post">
    <p>Entrer votre mot de passe dans ce champ</p>
    <input type="text" name="mot_de_passe" placeholder="Entrer votre mot de passe" >
    <input type="submit" name="Envoyer" id="Envoyer">
   </form>

   <?php
        //verifions sur le mot de passe existe
      if (isset($_POST['mot_de_passe']))
      {
       $mot_de_passe=$_POST['mot_de_passe'];
      }
      else
      {
        $mot_de_passe="";
      }

      if($mot_de_passe=="Toto")
      {
        //affichage de la page 
        ?>

      <p>BOnjour chers utilisateur</p>

      <?php 

      }
      else
      {
        //affichage de la page
        ?>

        <p>Retry</p>

        <?php


      }
       
      
   ?>
      
   
   
   
   
    
</body>
</html>