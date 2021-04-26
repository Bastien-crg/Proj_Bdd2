<?php session_start()
	if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
		echo '<!DOCTYPE html>
				<html>
				<head>
					<title></title>
				</head>
				<body>
					<?php
					include("header.inc.php");
					?>
					<p>test</p>


				</body>
				</html>';
		} else {
			echo "vous n'êtes pas connécté";
		}
?>

