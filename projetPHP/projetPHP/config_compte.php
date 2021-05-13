
<?php session_start();

	if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
		echo '<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
    				<title>index</title>
    				<link rel="stylesheet" type="text/css" href="style.css">
				</head>
				<body>';

		include("header.inc.php");


        include("connexion.inc.php");
            $requete="\c rdirezdu_db";
            $result=$cnx->query($requete);
            $requete="set search_path to projet ;"; 
            $result=$cnx->query($requete);
            $requete="select * from adhérents where mailadherent = '".$_SESSION['login']."';"; 
            $result=$cnx->query($requete);
            echo "<div class='adherents'>";
            while($ligne = $result->fetch()){
                echo $ligne["pseudoadherent"]."  ".$ligne["mailadherent"]."  ".$ligne["teladherent"];

            }
            echo "</div>";

		echo '

        <div class="container">
		<p>Pour changer votre pseudo :</p> 

		<form class="formulaire" method="POST" action="#">
    		<div class="form_group">
        		<label for="pseudo">Votre nouveau Pseudo</label>
        		<input class="enter_pseudo" type="text" name="pseudo"></input>
    		</div>

        	<button type="submit">modifier</button>

    	</form>

        <br><br>

    	<p>Pour changer votre email :</p> 

		<form class="formulaire" method="POST" action="#">
    		<div class="form_group">
        		<label for="email">Votre nouveau mail</label>
        		<input class="enter_email" type="text" name="email"></input>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 

        <br><br>

    	<p>Pour changer votre téléphone :</p> 

		<form class="formulaire" method="POST" action="#">
    		<div class="form_group">
        		<label for="tel">Votre nouveau numéro de téléphone</label>
        		<input class="enter_tel" type="text" name="tel"></input>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 
        <br><br>
    	<p>Pour changer votre mot de passe :</p> 

		<form class="formulaire" method="POST" action="#">
    		<div class="form_group">
        		<label for="mdp">Votre nouveau mdp</label>
        		<input class="enter_mdp" type="text" name="mdp"></input>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 
        </div>

		';	


        function majCompte($arg1, $arg2){

            include("connexion.inc.php");
            $requete="\c rdirezdu_db";
            $result=$cnx->query($requete);
            $requete="set search_path to projet ;"; 
            $result=$cnx->query($requete);
            $requete2="select numclient from adhérents where mailadherent = '".$_SESSION['login']."' ;"; 
            $result2=$cnx->query($requete2);

            while($ligne = $result2->fetch()){

                $requete = "update adhérents
                    set ".$arg2." = '".$arg1."'
                    where numclient = ".$ligne["numclient"].";";    
                $result=$cnx->query($requete);
            }

        }

        

        if (isset($_POST["pseudo"])||isset($_POST["mail"])||isset($_POST["mdp"])||isset($_POST["tel"])) {
            if (isset($_POST["pseudo"])) {
                majCompte($_POST["pseudo"],'pseudoadherent');
            }
            if (isset($_POST["mail"])) {
                echo "zouzou";
                majCompte($_POST["mail"],'mailadherent');
            }
            if (isset($_POST["mdp"])) {
                majCompte(md5($_POST["mdp"]),'password');
            }
            if (isset($_POST["tel"])) {

                if((integer)$_POST["tel"] != 0){
                    majCompte((integer)$_POST["tel"],'teladherent');
                }
            }

            header('location: https://etudiant.u-pem.fr/~bcorgnac/projetPHP/config_compte.php');

        }

	

		echo'
				</body>
				</html>';
		} else {
			echo "vous n'êtes pas connécté";
		}
?>

