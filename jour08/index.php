<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>

    <link rel="stylesheet" href="output.css">
</head>
<body id="top">
    <header class="bg-orange-300 z-100 fixed top-0 w-full shadow">
        <nav id="main-nav" class="bg-orange-300 flex justify-between items-center max-w-5xl mx-auto font-poppins p-6">
            
            <a href="top" class="felx" aria-label="Page d'accueil"><img class="hidden md:w-7 md:inline md:mr-4" src="./img/ubuntu.png" alt=""><span class="text-lg lg:text-xl" aria-hidden="true"><strong class="text-red-700">L</strong>ogo</span></a>

            <button aria-label="toggel button" aria-expanded="false" id="menu-btn" class="cursor-pointer w-7 md:hidden"><img src="./img/berger.png" alt=""></button>
            <ul id="toggled-menu" class="w-full absolute top-full left-0 bg-orange-300 -translate-y-full -z-10 text-gray-800 border-b border-gray-200 flex flex-col items-center md:static md:z-10 md:w-min md:transform-none md:border-none md:flex-row">
                <li class="py-4 md:py-0 md:mr-6"><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#Acceuil">Accueil</a></li>
                <li class="py-4 md:py-0 md:mr-6"><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Inscription</a></li>
                <li class="py-4 md:py-0 md:mr-6"><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Connexion</a></li>
                <li class="py-4 md:py-0 md:mr-6"><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Rechercher</a></li>
            </ul>
        </nav>
    </header>

    <section >
        <form action="#" class="flex justify-center items-center">

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
    <script src="./app.js"></script>
</body>
</html>