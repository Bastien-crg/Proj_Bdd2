<!DOCTYPE html>
<html>
<head>
    <title>formulaire</title>
    <link rel="stylesheet" type="text/css" href="styleFormulaire.css">
</head>
<body>
    <!-- connexion -->
    <section>
    <div class="container">
        <form class="formulaire" method="POST" action="connexion.php">
        <div class="form_group">
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="E-mail is required">
        </div>
        <div class="form_group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password is required">
        </div>

            <button type="submit" name="submit">Login</button>
        </form>
    </div>


    <br>
    <p>Si vous ne possédez pas de compte</p>

    <div class="container">
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



            <button type="submit" name="submit">inscription</button>
        </form>   
    </div> 
</section>
</body>
</html>

