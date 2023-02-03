<?php
session_start();

if (isset($_POST['email'])):
    //  securiser les inputs
    $email = strip_tags(trim($_POST['email']));
    $password = strip_tags(trim($_POST['password']));

        //  verifier que tout le formulaire est bien rempli
    if (isset($email) && !empty($email) && isset($password) && !empty($password)):

        //  La connexion a la BD
        try{
            $db = new PDO("mysql:host=localhost;dbname=utilisateurs", "root", "");
        }
        catch(PDOException $e){
            echo 'ERREUR CONNEXION: ' . $e->getMessage();
        }
        //  verifier l'existance user
        $data = $db->prepare("SELECT * FROM `utilisateurs` WHERE email=?");
        $data->execute(["$email"]);
        $fetch_ass = $data->fetchAll(PDO::FETCH_ASSOC);

        //
        if (count($fetch_ass) > 0):
            $password_BD = $fetch_ass[0]['password'];

            if (password_verify($password, $password_BD)):

                $messg = 'Bienvenu Mr. '. $fetch_ass[0]['prenom']. ' '. $fetch_ass[0]['nom'] . ' Vous êtes bien connecté !';
            else:
                $err =  'Password Incorrecte !';
            endif;
        endif;

        // var_dump($fetch_ass);

    endif;
endif;
?>
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
                <label for="email">Email</label>
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
        <p style="color: red"><?php if (isset($err)):
            echo $err; endif;?></p>
            <p style="color: green"><?php if (isset($messg
            )):
            echo $messg; endif;?></p>
        </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>