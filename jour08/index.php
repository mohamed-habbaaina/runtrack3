<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>

    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id="top" class="h-full">
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
    <main class="flex justify-center items-center">

        <section class="flex justify-center items-center pt-20">
            <form action="#" >
                
                <fieldset class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <legend>Civilité</legend>
                    <label for="cevil">H</label>
                    <input type="radio" id="homme" name="cevil" value="homme" checked>
                    <label for="cevil">F</label>
                    <input type="radio" id="femme" name="cevil" value="femme">
                </fieldset>

                <div class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom">
                </div>

                <div class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>

                <div class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" >
                </div>
                <div class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </div>
                <fieldset class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <legend>Passions :</legend>

                    <label for="informatique">Informatique</label>
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" id="informatique" name="informatique"  value="informatique"checked>

                    <label for="voyages">Voyages</label>
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" id="voyages" name="voyages" value="voyage">

                    <label for="sport">Sport</label>
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" id="sport" name="sport" value="sport">

                    <label for="lecture">Lecture</label>
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" type="checkbox" id="lecture" name="lecture" value="lecture">
                </fieldset>

                <button type="submit" class="bg-orange-300 w-full px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Envoyer</button>
            
            </form>
        </section>
    </main>
    <footer>
        <nav id="main-nav" class=" w-full flex justify-center items-center  font-poppins">

            <ul id="toggled-menu" class="w-full bg-orange-700 text-gray-800 border-b border-gray-200 flex flex-col items-center ">
                <li class="py-4 "><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#Acceuil">Accueil</a></li>
                <li class="py-4 "><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Inscription</a></li>
                <li class="py-4 "><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Connexion</a></li>
                <li class="py-4 "><a class="text-sm uppercase font-semibold pl-6 hover:text-red-700" href="#">Rechercher</a></li>
            </ul>
        </nav>
    </footer>
    <script src="./app.js"></script>
</body>
</html>