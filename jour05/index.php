<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php require_once('./includes/header.php') ?>
    <?php
        if(isset($_SESSION['login'])): echo 'Bonjour'.  $_SESSION['login'];
        else: echo 'Bonjour';
        endif; ?>
    <script src="./includes/script.js"></script>
</body>
</html>