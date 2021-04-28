<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php

        if (isset($_POST["email"]) && isset($_POST["pseudo"]) && isset($_POST["mdp"]) && isset($_POST["adresse"]) && isset($_POST["tel"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {
            include("connexion.inc.php");

            $requete="\c rdirezdu_db";
            $result=$cnx->query($requete);
            $requete="set search_path to projet ;"; 
            $result=$cnx->query($requete);

            $requete="insert into client values ('".$_POST["prenom"]."','".$_POST["nom"]."') returning numclient"; 
            $result=$cnx->query($requete);

            while($ligne = $result->fetch()){

                $var = $ligne['numclient'];
            }

            


            $requete2="insert into adhérents values('".$_POST["pseudo"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["adresse"]."',null,null,'".$_POST["mdp"]."',".$var.");"; 
            $result2=$cnx->query($requete2);

            $_SESSION['login'] = $_POST['email'];
            $_SESSION['password'] = $_POST['mdp'];
            header('location: https://etudiant.u-pem.fr/~bcorgnac/config_compte.php');

        
            
            
        
        
        
        
    }

    ?>

</body>
</html>