<!-- 
    Mohamed HABBAAINA Le 20/01/2023

Téléchargez le fichier suivant : pokemon.json
Créez un formulaire permettant de trier ces données.
Il doit contenir les champs suivants :
● id (input type text),
● nom (input type text),
● type (liste déroulante <select>)
● filtrer (input type button).
Lorsque l’on clique sur “filtrer”, le script doit à l’aide de Fetch, récupérer le contenu du
fichier et lister les éléments répondant aux critères sélectionnés en les affichant sur une
page HTML.
 -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job3</title>
</head>
<body>
    <form action="#">
        <label for="id">Id</label>
        <input type="text" name="id" id="id" placeholder="Id">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Nom">

        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="type"></option>
        </select>

        <button type="button">Filtrer</button>
    </form>

    <script src="script.js"></script>
</body>
</html>