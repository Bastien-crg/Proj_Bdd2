<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index Admin</title>
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
        $requete="select nomemploye,prenomemploye, debutplanningemployer, finplanningemployer from employés;"; 
        $result=$cnx->query($requete);

        while($ligne = $result->fetch()){

          echo $ligne['nomemploye']."   ";
          echo $ligne['prenomemploye']."   ";
          echo $ligne['debutplanningemployer']."   ";
          echo $ligne['finplanningemployer']."<br>";

        }
        echo "<br><br>";










        $requete="select nummachine,etats_machine from machines order by nummachine;"; 
        $result=$cnx->query($requete);

        while($ligne = $result->fetch()){

          echo $ligne['nummachine']." ";
          echo $ligne['etats_machine']."<br>";

        }









        echo '<form name="saisie" method="GET" action="updateMachine.php">
              Entrez un numéro de machine : 
              <select size="1" name="nummachine">
        ';

        $requete="select nummachine from machines order by nummachine;"; 
        $result=$cnx->query($requete);

        while($ligne = $result->fetch()){

          echo '<option value='.$ligne['nummachine'].'>'.$ligne['nummachine'].'</option>';
        }
          echo '
          </select>           
          

          <label>Fonctionnement</label>
            
          <select size="1" name="fonctionnement">
            <option value="En service">En service</option>
            <option value="Hors servive">Hors servive</option><br>
          </select>

          <input type="submit" name="OK" value="OK"/></form>

        ';











        echo "<br><br>";

        echo '
          <div class="title">
          Voici les membres fidel: <!-- mettre le nom du joueur -->
          </div>
        ';



        $requete="select pseudoadherent from adhérents natural join parties group by adhérents.pseudoadherent order by count(parties.numclient) desc limit 3;"; 
        $result=$cnx->query($requete);

        $var = 0;

        while($ligne = $result->fetch()){
          $var ++;
          echo '
          <div class="container">
            TOP '.$var.': '.$ligne["pseudoadherent"].'<br> <!-- mettre le nom du membre -->
          </div>';
        }


        ?>


    </body>
</html>