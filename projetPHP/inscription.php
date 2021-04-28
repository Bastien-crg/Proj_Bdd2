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

        if (isset($_POST["email"]) && isset($_POST["pseudo"]) && isset($_POST["mdp"]) && isset($_POST["adresse"]) && isset($_POST["tel"])) {
            include("connexion.inc.php");

            $requete="\c rdirezdu_db";
            $result=$cnx->query($requete);
            $requete="set search_path to projet ;"; 
            $result=$cnx->query($requete);

            $requete="insert into adhérents values(default,'".$_POST["pseudo"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["adresse"]."',null,null,'".$_POST["password"]."');"; 


            $result=$cnx->query($requete);

            $requete="select password from connexion where email = '".$_POST["email"]."';";
            $result=$cnx->query($requete);
            
            while($ligne = $result->fetch()){

                if ($ligne['password'] == md5($_POST["password"])) {
                    
                    $_SESSION['login'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    header('location: https://etudiant.u-pem.fr/~bcorgnac/config_compte.php');
                }else {
                    echo "mot de passe ou email incorrecte";
            }
        
        
        }
        
    }

    ?>

</body>
</html>