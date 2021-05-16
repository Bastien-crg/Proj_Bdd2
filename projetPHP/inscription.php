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

        if (!empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["mdp"]) && !empty($_POST["adresse"]) && !empty($_POST["tel"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"])) {

            
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

            


            $requete2="insert into adhérents values('".$_POST["pseudo"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["adresse"]."',null,null,md5('".$_POST["mdp"]."'),".$var.");"; 
            $result2=$cnx->query($requete2);

            $_SESSION['login'] = $_POST['email'];
            $_SESSION['password'] = $_POST['mdp'];
            header('location: https://etudiant.u-pem.fr/~bcorgnac/projetPHP/config_compte.php');

        
            
            
        
        
        
        
    }
    header('location: https://etudiant.u-pem.fr/~bcorgnac/projetPHP/formulaire.php');

    ?>

</body>
</html>