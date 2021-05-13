<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		echo $_GET["nummachine"];
		echo $_GET["fonctionnement"];

		if (isset($_GET["nummachine"]) && isset($_GET["fonctionnement"])) {

			function maj($arg1, $arg2){
				include("connexion.inc.php");
				$requete="\c rdirezdu_db";
				$result=$cnx->query($requete);
				$requete="set search_path to projet ;";	
				$result=$cnx->query($requete);
				if ($_GET["fonctionnement"] == "En service") {
					$requete="update machines set etats_machine = 'E.S' where nummachine = ".$arg1.";";
				} else {
					$requete="update machines set etats_machine = 'H.S' where nummachine = ".$arg2.";";
				}
				$result=$cnx->query($requete);
			}


			maj($_GET["nummachine"],$_GET["fonctionnement"]);

		}
		header('location: https://etudiant.u-pem.fr/~bcorgnac/projetPHP/controleAdmin.php');

	?>

</body>
</html>