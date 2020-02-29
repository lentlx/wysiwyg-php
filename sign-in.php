<?php



echo'
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <title>Connexion</title>

    <!--Fonts import-->
    <link rel="stylesheet" href="https://use.typekit.net/htg5uml.css">

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body class="one-screen">
        <h1>Connexion</h1>
        <form method="POST" action="dashboard.php">
            <div>
                <label for="mail">E-mail</label>
                <input type="email" name="mail" required id="mail" placeholder="" />
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required id="password"/>
            </div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </form>
</body>

</html>
';
?>