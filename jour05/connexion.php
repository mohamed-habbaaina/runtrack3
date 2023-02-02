<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
<?php require_once('./includes/header.php') ?>
    
    <main>
        <form action="connexion.php" method="post" id="form-register">
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email" placeholder="Votre Email">
                <small></small>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Votre Password">
                <small></small>
            </div>
            <div>
                <button type="submit" id="btn-connect">Connexion</button>
            </div>
        </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>