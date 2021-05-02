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
        ?>
        <br>
        <h2> Horaires employés </h2><br><br>
        <div class="cube">
          
        <?php
        while($ligne = $result->fetch()){

          echo $ligne['nomemploye']."   ";

          echo $ligne['prenomemploye']."   ";

          echo $ligne['debutplanningemployer']."   ";

          echo $ligne['finplanningemployer']."<br>";
        }
        ?>

        </div>
        <?php
        echo "<br><br>";










        $requete="select nummachine,etats_machine from machines order by nummachine;"; 
        $result=$cnx->query($requete);
        ?>
        <h2>État des machines</h2>
        <div class="cube">
          
       <?php
        while($ligne = $result->fetch()){
          echo $ligne['nummachine']." ";
          echo $ligne['etats_machine']."<br>";
        }
        ?>
        </div>
        

        <br><br>
        <h2> Changer l'etat d'une machine: </h2>
        <div class="container">
          
        
        <form name="saisie" method="GET" action="updateMachine.php">
          <div class="form_group">
              Entrez un numéro de machine : 
              <select size="1" name="nummachine">


        <?php
        $requete="select nummachine from machines order by nummachine;"; 
        $result=$cnx->query($requete);

        while($ligne = $result->fetch()){

          echo '<option value='.$ligne['nummachine'].'>'.$ligne['nummachine'].'</option>';
        }
        ?>
            </select> 
            </div>
            <div class="form_group">          
            <label>Fonctionnement</label>
            <select size="1" name="fonctionnement">
              <option value="En service">En service</option>
              <option value="Hors servive">Hors servive</option><br>
            </select>
          </div>

            <button type="submit" name="OK" value="OK">change</button></form>
          </div>
          <?php










        echo "<br><br>";

        echo "
          <h2> Voici les membres fidel:</h2>";



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