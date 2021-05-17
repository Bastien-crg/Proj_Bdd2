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

		if (!empty($_POST["email"]) && !empty($_POST["password"])) {
			include("connexion.inc.php");

			$requete="\c rdirezdu_db";
			$result=$cnx->query($requete);
			$requete="set search_path to projet ;";	
			$result=$cnx->query($requete);
			$requete="select password from adhérents where mailadherent = '".$_POST["email"]."';";
			$result=$cnx->query($requete);
			
			while($ligne = $result->fetch()){
				
				//si le mot de passe correspond à celui de la base de donnée alors on crée une session
				if ($ligne['password'] == md5($_POST["password"])) {
					
					$_SESSION['login'] = $_POST['email'];
					$_SESSION['password'] = $_POST['password'];
					header('location: config_compte.php');
					
				}
			}

			
			$requete="select password from employés where email = '".$_POST["email"]."';";
			$result=$cnx->query($requete);

			// si rien n'est trouvé chez les clients on test si le mot de passe correspond à celui d'un employé
			while($ligne = $result->fetch()){
				
				if ($ligne['password'] == md5($_POST["password"])) {
					
					header('location: controleAdmin.php');
				

				}

			}
			// message d'erreur si le mot de passe ne correspond à rien
			echo "mot de passe ou mail incorrecte<br>";
			echo '<a href="formulaire.php" class="nav_link">Retour</a><br>';


		}else {
			// message d'erreur s'il manque un champ
			echo "veuillez entrer un mail et un mot de passe<br>";
			echo '<a href="formulaire.php" class="nav_link">Retour</a><br>';
		
	}


	
	?>

</body>
</html>