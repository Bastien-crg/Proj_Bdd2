
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
        <section>
        <div class="container">
		<p>Pour changer votre pseudo :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="form_group">
        		<label for="pseudo">Votre nouveau Pseudo</label>
        		<input class="enter_pseudo" type="text" name="pseudo>
    		</div>

        	<button type="submit">modifier</button>

    	</form>



    	<p>Pour changer votre email :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="form_group">
        		<label for="email">Votre nouveau mail</label>
        		<input class="enter_email" type="text" name="email>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 



    	<p>Pour changer votre téléphone :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="form_group">
        		<label for="tel">Votre nouveau numéro de téléphone</label>
        		<input class="enter_tel" type="text" name="tel>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 

    	<p>Pour changer votre mot de passe :</p> 

		<form class="formulaire" method="POST" action="update.php">
    		<div class="form_group">
        		<label for="mdp">Votre nouveau mdp</label>
        		<input class="enter_mdp" type="text" name="mdp>
    		</div>

        	<button type="submit">modifier</button>

    	</form> 
        </div>
        </section>

		';	


		

		echo'
				</body>
				</html>';
		} else {
			echo "vous n'êtes pas connécté";
		}
?>

