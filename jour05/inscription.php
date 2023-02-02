<?php
session_start();
if (isset($_POST['email'])):

    //  securiser les inputs
    $nom = strip_tags(trim($_POST['nom']));
    $prenom = strip_tags(trim($_POST['prenom']));
    $email = strip_tags(trim($_POST['email']));
    $password = strip_tags(trim($_POST['password']));
    $repass = strip_tags(trim($_POST['repass']));

    //  verifier que tout le formulaire est bien rempli
    if (isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) && isset($email) && !empty($email) && isset($password) && !empty($password) && isset($repass) && !empty($repass) && $password === $repass):

        // crypté le password
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

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

        // si le tableau est vide inser user dans la base de données
        if(empty($fetch_ass)):
        $req = $db->prepare("INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `password`) VALUES (:nom, :prenom, :email, :password);");
        $req->execute([":nom" => "$nom", ":prenom" => "$prenom", ":email" => "$email", ":password" => "$password"]);

        // création des variables de SESSION et redirection
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            header("location: index.php");  // la redirection ne fonction pas sans rafrichir la page
        endif;
    endif;

endif; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php require_once('./includes/header.php') ?>
    
    <main>
        <form action="inscription.php" method="post" id="form-register">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Votre Nom">

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom">

            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="Votre Email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Votre Password">

            <label for="repass">Confermer Votre Password</label>
            <input type="password" name="repass" id="repass" placeholder="Confermer Votre Password">

            <button type="submit" id="btn-register">S'Iscrire</button>
        </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>