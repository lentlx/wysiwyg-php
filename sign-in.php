<?php
session_start();

if(!empty($_POST["email"]) and !empty($_POST["password"])){
    //Variables de l'user
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Suppresion des balises script
    $email = strip_tags($email);
    $password = htmlentities($password);

    //Set session
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["user"] = $email;

    //Redirection
    header("location:dashboard.php");
}
else{
    $probleme_required = "Vous devez remplir tous les champs.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <title>Connexion</title>

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body class="one-screen">
        <h1>Connexion</h1>
        <p class="avertissement"><?php echo($probleme_required); ?></p>
        <form method="post" action="sign-in.php">
            <div>
                <label for="mail">E-mail</label>
                <input type="email" name="email" required id="email" placeholder="" value="<?php $email ?>" />
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required id="password" value="<?php $password ?>"/>
            </div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </form>
</body>

</html>