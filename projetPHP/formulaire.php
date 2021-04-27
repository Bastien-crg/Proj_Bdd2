<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
</head>
<body>
    <!-- connexion -->
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


    <br>
    <p>Si vous ne poussédez pas de compte</p>


    <form class="formulaire" method="POST" action="#">


        <div class="form_group">
                <label for="speudo">Speudo</label>
                <input type="text" id="speudo" name="speudo">                    
        </div>

        <div class="form_group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">                    
        </div>

        <div class="form_group">
                <label for="tel">Tel</label>
                <input type="text" id="tel" name="tel">                    
        </div>

        <div class="form_group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse">                    
        </div>

        <div class="form_group">
            <label for="mdp">MDP</label>
            <input name="message" id="message" cols="30" rows="10"></input>                 
        </div>

        <button type="submit">inscription</button>
    </form>   
</body>
</html>