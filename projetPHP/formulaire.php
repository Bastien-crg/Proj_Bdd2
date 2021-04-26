<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
</head>
<body>
    <form class="formulaire" method="POST" action="connexion.php">
    <div class="email">
        <span class="input_email">E-mail</span>
        <input class="enter_email" type="text" name="email" placeholder="E-mail is required">
    </div>
    <div class="mdp">
        <span class="input_mdp">Password</span>
        <input class="enter_mdp" type="password" name="password" placeholder="Password is required">
    </div>

    <div class="login">
        <button class="login_button" name="submit">
            Login
        </button>
    </div>
    </form>   
</body>
</html>