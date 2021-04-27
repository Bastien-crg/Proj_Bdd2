
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

		echo '
		<p>Pour changer votre pseudo :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="newpseudo">
        		<span class="input_pseudo">Votre nouveau Pseudo</span>
        		<input class="enter_pseudo" type="text" name="pseudo>
    		</div>
    		

    		<div class="modifier">
        		<button class="button" name="modifier">
            	modifier
        		</button>
    		</div>
    	</form>



    	<p>Pour changer votre email :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="newmail">
        		<span class="input_email">Votre nouveau mail</span>
        		<input class="enter_email" type="text" name="email>
    		</div>
    		

    		<div class="modifier">
        		<button class="button" name="modifier">
            	modifier
        		</button>
    		</div>
    	</form> 



    	<p>Pour changer votre téléphone :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="newtel">
        		<span class="input_tel">Votre nouveau numéro de téléphone</span>
        		<input class="enter_tel" type="text" name="tel>
    		</div>
    		

    		<div class="modifier">
        		<button class="button" name="modifier">
            	modifier
        		</button>
    		</div>
    	</form> 



    	<p>Pour changer votre mot de passe :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="newmdp">
        		<span class="input_mdp">Votre nouveau Pseudo</span>
        		<input class="enter_mdp" type="text" name="email>
    		</div>
    		

    		<div class="modifier">
        		<button class="button" name="modifier">
            	modifier
        		</button>
    		</div>
    	</form> 

		';	


		

		echo'
				</body>
				</html>';
		} else {
			echo "vous n'êtes pas connécté";
		}
?>

