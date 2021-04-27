<?php
	if (isset($_SESSION['password']) && isset($_SESSION['login'])){

	echo'
	<header>
     	<nav class="nav_top">
	     	<div class="nav_list">
	     		<a href="podium.php" class="nav_link">Podium</a>
	     	</div>

	     	<div class="nav_list">
	     		<a href="plainte.php" class="nav_link">Plainte</a>
	     	</div>

	     	<div class="nav_list">
	     		<a href="config_compte.php" class="nav_link">Mon compte</a>
	     	</div>

	     	<div class="nav_list">
	     		<a href="index.php" class="nav_link">Arcade2000</a>
	     	</div>
	     </nav>
     </header>';
 	} else {
 		echo'
 		<header>
     	<nav class="nav_top">
	     	<div class="nav_list">
	     		<a href="podium.php" class="nav_link">Podium</a>
	     	</div>

	     	<div class="nav_list">
	     		<a href="plainte.php" class="nav_link">Plainte</a>
	     	</div>

	     	<div class="nav_list">
	     		<a href="formulaire.php" class="nav_link">Connexion</a>
	     	</div>
	     	<div class="nav_list">
	     		<a href="index.php" class="nav_link">Arcade2000</a>
	     	</div>
	     </nav>
     </header>';
 	}

?>