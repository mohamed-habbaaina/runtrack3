<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php require_once('./includes/header.php') ?>
<main>
    <?php
    if (isset($_SESSION['nom'])):
            echo 'Bonjour '. $_SESSION['prenom'] . ' ' .  $_SESSION['nom'];
        else: echo 'Bonjour';
        endif; ?>
</main>
    <script src="./includes/script.js"></script>
</body>
</html>