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
			include("connexion.inc.php");

			$requete="\c rdirezdu_db";
			$result=$cnx->query($requete);
			$requete="set search_path to projet ;";	
			$result=$cnx->query($requete);
			if ($_GET["fonctionnement"] == "En service") {
				$requete="update machines set etats_machine = 'E.S' where nummachine = ".$_GET["nummachine"].";";
			} else {
				$requete="update machines set etats_machine = 'H.S' where nummachine = ".$_GET["nummachine"].";";
			}
			$result=$cnx->query($requete);

			
			
		}
		header('location: https://etudiant.u-pem.fr/~bcorgnac/controleAdmin.php');

	?>

</body>
</html>