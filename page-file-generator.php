<?php

//Affectation des variables
$file = strip_tag($_POST['file']);
$titre = htmlentities($_POST['titre']);
$bgcolor = $_POST['bg-color'];
$headerColor = $_POST['header-color'];
$h1 = htmlentities($_POST['h1']);
$mytextarea = $_POST['mytextarea'];
$fontcolor = $_POST['fontcolor'];
define("ENCODAGE","utf-8");

//Si l'utilisateur ne rempli pas le formulaire :
if(!isset($_POST['titre']) or $_POST['titre'] =="")
{
    $titre = "Titre de l'onglet";
}

if(!isset($_POST['h1']) or $_POST['h1'] == "")
{
    $h1 = "Vous n'avez pas saisi de titre";
}

//SUPPRESION DES ESPACES DANS NOM DU FICHIER
while(strpos($file," ") != false){
    $file = str_replace(" ","",$file);
}

//CONTENU DE LA PAGE
$contenu = '
<!DOCTYPE html>
<html>
    <head>
    <meta charset="'.ENCODAGE.'" />
        <title>'.$titre.'</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body style="background-color:'.$bgcolor.'; color:'.$fontcolor.';">
        <header style="background-color:'.$headerColor.';">
                    <h1>'.$h1.'</h1>
        </header>
        <main>
            <div style="padding: 0% 10%">
                <p>'.$mytextarea.'</p>
            </div>
        </main>
    </body>
</html>
';

//CRÉATION DU FICHIER HTML
// fopen permet d'ouvrir un fichier sur le gestionnaire de fichiers ou le serveur. 
//Cela permet d'apporter des modifications dans un fichier grâce au php.
// Si le fichier n'existe pas,la fonction le crée.
$fichier = fopen("generated-pages/".$file.".html", "w");

//Cette ligne permet d'encoder le contenu en utf-8, pour les logiciels comme Excel qui n'utilisent pas cet encodage.
$contenu = utf8_decode($contenu);

// fwrite va écrire du contenu dans le fichier ouvert =>  fwirite($destination, $contenu).
fwrite($fichier,$contenu);

// fclose permet de refermer le fichier.
fclose($fichier);

// On affiche OK une fois la fonction éxécutée.
echo'
<!DOCTYPE html>
<html>
    <head>
    <meta charset="'.ENCODAGE.'" />
        <title>Confirmation génération de la page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>Générateur de page web : Confirmation</h1>
        </header>
        <main class="flex-center">
            <div class="flex-column">
                <div>
                    <p>Votre page a bien été crée.</p>
                </div>
                <div>
                    <a href="generated-pages/'.$file.'.html">Cliquez ici pour visualiser la page</a>
                </div>
            <div>
        </main>
    </body>
</html>
';

?>