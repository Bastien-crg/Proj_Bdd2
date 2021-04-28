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


    <form class="formulaire" method="POST" action="inscription.php">


        <div class="form_group">
                <label for="speudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo">                    
        </div>

        <div class="form_group">
                <label for="speudo">Prenom</label>
                <input type="text" id="prenom" name="prenom">                    
        </div>

        <div class="form_group">
                <label for="speudo">Nom</label>
                <input type="text" id="nom" name="nom">                    
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
            <input name="mdp" id="mdp" cols="30" rows="10"></input>                 
        </div>



        <button type="submit">inscription</button>
    </form>   
</body>
</html>