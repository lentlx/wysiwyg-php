<?php



// Carte de visualisation du nouveau profil admin créé
echo'
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Création compte admin : confirmation</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body">
        <header>
            <h1>Création d\'un nouveau compte administrateur : confirmation</h1>
        </header>
        <main class="flex-center">
            <div class="flex-column">
                <div>
                    <p>Le compte administrateur de '.$compte_admin.' a bien été créé.</p>
                </div>
                <div>
                    <a href="dashboard.php">Retour à l\'accueil</a>
                </div>
            </div>
        </main>
    </body>
</html>
';

?>