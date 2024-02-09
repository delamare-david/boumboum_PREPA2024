<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/form.js" defer></script>
</head>

<body>
    <header>
        <?php include("./inc/menu.php"); ?>
    </header>
    <h1>Welcome to BOOMBOOM</h1>
    <form action="" name="etape1">
        <div class="champs">
            <input type="email" placeholder="Votre email" name="email">
        </div>
        <div class="champs">
            <input type="password" placeholder="Votre mot de passe" name="password">
        </div>
        <div class="boutons">
            <input type="submit" value="La suite">
        </div>
    </form>
    <form action="" name="etape2" style="display:none;">
        <div class="champs">
            <input type="text" placeholder="Votre nom" name="nom">
        </div>
        <div class="champs">
            <input type="text" placeholder="Votre prenom" name="prenom">
        </div>
        <div class="champs">
            <input type="date" placeholder="Votre age" name="age">
        </div>
        <div class="radio">
            Homme<input type="radio" name="sexe" value="homme">
            Femme<input type="radio" name="sexe" value="femme">
        </div>
        <div class="boutons">
            <input type="submit" value="La suite">
        </div>
    </form>
    <form action="" name="etape3" style="display: none;">
        <div class="champs">
            <input type="text" placeholder="Votre téléphone" name="telephone">
        </div>
        <div class="champs">
            <input type="text" placeholder="Votre adresse" name="adresse">
        </div>
        <div class="boutons">
            <input type="submit" value="La suite">
        </div>
    </form>
    <form action="musicSelection.php" method="post" name="etape4" style="display: none;">
        <div class="champs">
            <textarea name="profil" placeholder="Votre description :"></textarea>
        </div>
        <div class="radio">
            HipHop <input name="HipHop" type="checkbox">
            Rock <input name="Rock" type="checkbox">
            Techno <input name="Techno" type="checkbox">
            Kpop <input name="Kpop" type="checkbox">
            Rap <input name="Rap" type="checkbox">
            Jazz <input name="Jazz" type="checkbox">
            Metal <input name="Metal" type="checkbox">
        </div>
        <div class="boutons">
            <input type="hidden" name="email">
            <input type="hidden" name="password">
            <input type="hidden" name="nom">
            <input type="hidden" name="prenom">
            <input type="hidden" name="age">
            <input type="hidden" name="sexe">
            <input type="hidden" name="telephone">
            <input type="hidden" name="adresse">
            <input type="hidden" name="tags">

            <input type="submit" value="FIN" name="fin" class="placeholder">
        </div>
    </form>
</body>

</html>