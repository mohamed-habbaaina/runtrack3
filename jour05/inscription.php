<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php require_once('./includes/header.php') ?>
    
    <main>
        <form action="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </form>
    </main>
    
</body>
</html>