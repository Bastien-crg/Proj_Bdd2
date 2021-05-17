<?php session_start()

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
     include("header.inc.php");
     ?>

     <h2>Voici les jeux du moment</h2>

    <div class="cube">
     		<?php
				include("connexion.inc.php");
				$requete="\c rdirezdu_db";
				$result=$cnx->query($requete);
				$requete="set search_path to projet ;";	
				$result=$cnx->query($requete);

				//recupere le nom du jeu et le nom de l'image correspondante
				$requete="select nomjeu , image from jeux where jeux.numjeu in (
					select numjeu as nb from parties group by numjeu
					order by nb desc
		 			limit 3);";
				$result=$cnx->query($requete);


				//affichage des images de la requête ci dessus
				while($ligne = $result->fetch()){
					echo "<div class='game'>";
					echo ($ligne['nomjeu']."<br>");
					echo '<img class="fit-picture" src="'.$ligne['image'].'" width="300px"><br>';
					echo "</div>";
				}
		?>
	</div>
</body>
</html>
