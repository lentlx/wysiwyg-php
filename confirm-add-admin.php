<?php

include 'functions-library/verif-img-upload.php';
include 'variables.php';

//Variables du nouveau compte
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$photo = $_POST['photo'];
$email = $_POST['email'];
$password = $_POST['password'];

$compte_admin = ucfirst(strtolower($prenom))." ".strtoupper($nom);

//Fonction de traitement de la photo de profil du nouveau compte admin
verifImageUpload();

// Carte de visualisation du nouveau profil admin créé
echo'
<!DOCTYPE html>
<html>
    <head>
    <meta charset="'.ENCODAGE.'" />
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