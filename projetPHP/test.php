<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

	<?php
		include("connexion.inc.php");




		$requete="\c rdirezdu_db";
		$result=$cnx->query($requete);
		$requete="set search_path to projet ;";	
		$result=$cnx->query($requete);
		$requete="select nomjeu from jeux where jeux.numjeu in (
					select numjeu as nb from parties group by numjeu
					order by nb desc
		 			limit 3);";
		$result=$cnx->query($requete);

		while($ligne = $result->fetch()){
			echo ($ligne[0]);

		}

		$requete = "UPDATE machines
		set etats_machine = '".$etat."'
		where nummachine = ".$nummachine.";";	
		$result=$cnx->query($requete);




		$requete = "UPDATE adhérents
		set pseudoadherent = '".$newpseudo."'
		where nummachine = ".$numclient.";";	
		$result=$cnx->query($requete);

		$requete = "UPDATE adhérents
		set mailadhernt = '".$newmail."'
		where nummachine = ".$numclient.";";	
		$result=$cnx->query($requete);


		$requete = "UPDATE adhérents
		set teladherent = '".$newnum."'
		where numclient = ".$numclient.";";	
		$result=$cnx->query($requete);



		//mdp




		$requete = "select pseudo_partie from parties
					where numjeu = ".$numjeu."
					order by score_partie
					limit 1;";	
		$result=$cnx->query($requete);


		$requete = "select pseudoadherent, nomjeu from parties join adhérents on parties.numclient = adhérents.numclient join jeux on parties.numjeu = jeux.numjeu where parties.numclient in (select numclient from parties as p1 where score_partie >= all (select score_partie from parties as p2 where p1.numjeu = p2.numjeu))and parties.numjeu in (select numjeu from parties as p1 where score_partie >= all (select score_partie from parties as p2 where p1.numjeu = p2.numjeu));";	
		$result=$cnx->query($requete);


		

	?>

</body>
</html>