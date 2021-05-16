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
        <h2> Horaires des employés </h2><br><br>

        <table BORDER=1 bgcolor="#e06e6e">


          
        <?php

        echo "<tr>\n";
        echo "<td>Nom</td>";
        echo "<td>Prénom</td>";
        echo "<td>Heure de début</td>";
        echo "<td>Heure de fin</td>";
        echo "</tr>\n";

        while($ligne = $result->fetch()){
          echo "<tr>\n";

          echo "<td>".$ligne['nomemploye']."</td>";

          echo "<td>".$ligne['prenomemploye']."</td>";

          echo "<td>".$ligne['debutplanningemployer']."</td>";

          echo "<td>".$ligne['finplanningemployer']."</td>";

          echo "</tr>\n";
        }
        ?>

        </table>

        <?php
        echo "<br><br>";




        $requete="select nummachine,etats_machine from machines order by nummachine;"; 
        $result=$cnx->query($requete);
        ?>
        <h2>État des machines</h2>

          <table BORDER=1 bgcolor="#e06e6e">
          
       <?php

        echo "<tr>\n";
        echo "<td>Numéro de machine</td>";
        echo "<td>État</td>";
        echo "</tr>\n";

        while($ligne = $result->fetch()){
          echo "<tr>\n";
          echo "<td>".$ligne['nummachine']."</td>";
          echo "<td>".$ligne['etats_machine']."</td>";
          echo "</tr>\n";
        }
        ?>
      </table>
        

        <br><br>
        <h2> Changer l'état d'une machine: </h2>
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
              <option value="Hors service">Hors service</option><br>
            </select>
          </div>

            <button type="submit" name="OK" value="OK">Changer</button></form>
          </div>
          <?php




        echo "<br><br>";

        echo "
          <h2> Voici les membres fidèles:</h2>";



        $requete="select pseudoadherent from adhérents natural join parties group by adhérents.pseudoadherent order by count(parties.numclient) desc limit 3;"; 
        $result=$cnx->query($requete);

        $var = 0;

        while($ligne = $result->fetch()){
          $var ++;
          echo '
          <div class="container">
            <p class="top">TOP '.$var.': '.$ligne["pseudoadherent"].'<p> <!-- mettre le nom du membre -->
          </div>';
        }


        ?>


    </body>
</html>