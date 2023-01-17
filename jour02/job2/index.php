<!-- 
        Mohamed HABBAAINA Le 17/01/2023

Créez une balise <button> ayant comme id “button”.
Lorsque l’on clique dessus, un <article> contenant le texte suivant est ajouté au contenu
de la page : “L'important n'est pas la chute, mais l'atterrissage.”
Si on clique à nouveau sur ce bouton, l’article disparaît.
L’apparition / Disparition doivent être gérées dans une fonction nommée “showhide()”.
 -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <article id="button">L'important n'est pas la chute, mais l'atterrissage</article>
    <button onclick="showhide()">Click</button>
<script src="script.js"></script>
</body>
</html>