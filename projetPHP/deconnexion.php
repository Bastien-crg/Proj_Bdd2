<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_destroy();
		header('location: https://etudiant.u-pem.fr/~bcorgnac/index.php');

	?>

</body>
</html>