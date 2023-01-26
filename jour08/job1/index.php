<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>

    <link rel="stylesheet" href="output.css">
</head>
<body class="bg-orange-300">
    <header>
        <nav>
            <ul>
                <li><a href="#" class="px-4">Accueil</a></li>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <form action="">

            <fieldset>
                <legend>Civilité</legend>
                <label for="cevil">H</label>
                <input type="radio" id="homme" name="cevil" value="homme" checked>
                <label for="cevil">F</label>
                <input type="radio" id="femme" name="cevil" value="femme">
            </fieldset>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom"  value="prenom">
            </div>

            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="nom">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="email">
            </div>

            <fieldset>
                <legend>Passions</legend>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="password">
    
                <label for="informatique">Informatique</label>
                <input type="checkbox" id="informatique" name="informatique"  value="informatique"checked>
    
                <label for="voyages">Voyages</label>
                <input type="checkbox" id="voyages" name="voyages" value="voyage">
    
                <label for="sport">Sport</label>
                <input type="checkbox" id="sport" name="sport" value="sport">
    
                <label for="lecture">Lecture</label>
                <input type="checkbox" id="lecture" name="lecture" value="lecture">
            </fieldset>

            <button type="submit">Envoyer</button>

        </form>
    </section>
    
</body>
</html>