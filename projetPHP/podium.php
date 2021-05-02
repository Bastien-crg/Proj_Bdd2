<?php
  session_start();
 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php
        include("header.inc.php");

        include("connexion.inc.php");
        $requete="\c rdirezdu_db";
        $result=$cnx->query($requete);
        $requete="set search_path to projet ;"; 
        $result=$cnx->query($requete);
        $requete = "select pseudoadherent, nomjeu from parties join adhérents on parties.numclient = adhérents.numclient join jeux on parties.numjeu = jeux.numjeu where parties.numclient in (select numclient from parties as p1 where score_partie >= all (select score_partie from parties as p2 where p1.numjeu = p2.numjeu))and parties.numjeu in (select numjeu from parties as p1 where score_partie >= all (select score_partie from parties as p2 where p1.numjeu = p2.numjeu));";  
        $result=$cnx->query($requete);

       

      


         
          ?>
          <br>
          <h2>Voici les meilleurs joueurs du moment</h2><br><br>
          <div class="cube">
            <?php
            while($ligne = $result->fetch()){
            echo($ligne["nomjeu"]." : ".$ligne["pseudoadherent"]."<br><br>"); 
            }

          ?>
          </div>
          

    <footer>
      
    </footer>

    </body>
</html>