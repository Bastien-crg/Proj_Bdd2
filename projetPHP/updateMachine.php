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

			//la fonction chage l'état de la machine de numéro $arg1, en fonction du fonctionnement donné
			function maj($arg1){
				include("connexion.inc.php");
				$requete="\c rdirezdu_db";
				$result=$cnx->query($requete);
				$requete="set search_path to projet ;";	
				$result=$cnx->query($requete);
				if ($_GET["fonctionnement"] == "En service") {
					$requete="update machines set etats_machine = 'E.S' where nummachine = ".$arg1.";";
					
				} else {
					$requete="update machines set etats_machine = 'H.S' where nummachine = ".$arg1.";";
					
				}
				$result=$cnx->query($requete);
			}


			maj($_GET["nummachine"]);

		}
		header('location: controleAdmin.php');

	?>

</body>
</html>