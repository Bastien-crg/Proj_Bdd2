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

		if (isset($_POST["email"]) && isset($_POST["password"])) {
			include("connexion.inc.php");

			$requete="\c rdirezdu_db";
			$result=$cnx->query($requete);
			$requete="set search_path to projet ;";	
			$result=$cnx->query($requete);
			$requete="select password from adhérents where mailadherent = '".$_POST["email"]."';";
			$result=$cnx->query($requete);
			
			while($ligne = $result->fetch()){
				
				
				if ($ligne['password'] == md5($_POST["password"])) {
					
					$_SESSION['login'] = $_POST['email'];
					$_SESSION['password'] = $_POST['password'];
					header('location: https://etudiant.u-pem.fr/~bcorgnac/config_compte.php');
					
				}
			}

			
			$requete="select password from employés where email = '".$_POST["email"]."';";
			$result=$cnx->query($requete);

			while($ligne = $result->fetch()){
				
				if ($ligne['password'] == md5($_POST["password"])) {
					
					header('location: https://etudiant.u-pem.fr/~bcorgnac/controleAdmin.php');
				

				}

			}

			echo "mot de passe ou mail incorrecte<br>";
			echo '<a href="formulaire.php" class="nav_link">Retour</a><br>';


		}else {
			echo "veuillez entrer un mail et un mot de passe<br>";
			echo '<a href="formulaire.php" class="nav_link">Retour</a><br>';
		
	}


	
	?>

</body>
</html>