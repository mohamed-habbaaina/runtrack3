<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php require_once('./includes/header.php') ?>
    
    <main>
        <form action="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre Email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Votre Password">

        </form>
    </main>
    
</body>
</html>