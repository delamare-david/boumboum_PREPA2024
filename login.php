<?php
// la fonction include permet d'importer un fichier externe
// include_once obligera à ne charger ce fichier qu'une seule 
// et unique fois
include_once("./inc/pdo.php");
//creation une variable pour les messages d'erreur
$error = "";
// est ce qu'un utilisateur a cliquer sur le submit?
if (isset($_POST["submited"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];/*  mot de passe en clair */
    // me permet de tester si l'email envoyer dans mon formulaire
    // existe dans ma base de données
    $rq = "SELECT * FROM `user` WHERE email = '$email'";

    $results = $pdo->prepare($rq);
    $results->execute();
    $results = $results->fetch();
    if (($results) > 0) {
        /* password_verify(password, $passwordverif) return boolean */
        $passwordVerif = $results["password"]; /* mot de passe hashé qui vient de ma base de donné(bdd) */
        if (password_verify($password, $passwordVerif)) {
            header("location: match.php?email=$email");
        } else {
            $error = "mot de passe incorrects...";
        }
    } else {
        $error = "Identifiants incorrects...";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<header>
        <?php include("./inc/menu.php"); ?>
    </header>
    Bonjour tout le monde !
    <?php
    /* Ici je déclare une variable avec le signe $ attaché */
    $unePhrase = "vous allez bien ?";
    // echo() est une fonction qui permet d'envoyer des informations 
    // au client
    echo ($unePhrase);
    // var_dump() est l'equivalent de la fonction javascript console.dir()
    // mais elle ne peut pas utiliser la console et affiche le resutat 
    // dans la page web
    var_dump($unePhrase);

    ?>
    <h1>Identifiez-vous</h1>
    <form action="login.php" method="post">
        <div>
            <input type="email" name="email">

        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Identifiez-vous" name="submited">
        </div>
    </form>
    <div>
        <?php echo ($error); ?>
    </div>
</body>

</html>