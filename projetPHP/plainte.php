<!DOCTYPE html>
<html>
<head>
	<title>plainte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>
		<div class="container">
			<form action="mailto:#" method="POST">

				<div class="form_group">
					<label for="nom">Sujet</label>
					<input type="text" id="sujet" name="sujet">                    
				</div>

				<div class="form_group">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">                    
				</div>

				<div class="form_group">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10"></textarea>                 
				</div>

				<button type="submit">Envoyer</button>

			</form>
		</div>
	</section>
</body>
</html>