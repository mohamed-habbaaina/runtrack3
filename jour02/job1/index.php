<!-- 
        Mohamed HABBAAINA Le 17/01/2023
        
Créez un <article> ayant comme id “citation” et contenant le texte suivant :
"La vie a beaucoup plus d’imagination que nous”.
Créez un <button> ayant comme id “button”. Lorsque l’on clique sur le bouton,
récupérez le contenu de l’élément ayant comme id “citation” et affichez le contenu dans
la console de développement.
La fonction de récupération et d’affichage doit se nommer “citation()”.
 -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
    <article id="citation">
        <p>La vie a beaucoup plus d’imagination que nous</p>
    </article>
    <button id="button" onclick="citation()">Click</button>
<script src="script.js"></script>
</body>
</html>