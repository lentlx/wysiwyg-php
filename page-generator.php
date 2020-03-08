<?php
session_start();

if(!isset($_SESSION["user"])){
    header("location:login.php");
    exit;
}

include "forms-library/page-form-generator.php";

if(!empty($_POST["file"]) and !empty($_POST["titre"]) and !empty($_POST["description"]) and !empty($_POST["bg-color"]) and !empty($_POST["header-color"]) and !empty($_POST["h1"]) and !empty($_POST["mytextarea"]) and !empty($_POST["font-color"]))
{
     //Affectation des variables
    $file = $_POST['file'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $bgcolor = $_POST['bg-color'];
    $headerColor = $_POST['header-color'];
    $h1 = $_POST['h1'];
    $mytextarea = $_POST['mytextarea'];
    $fontcolor = $_POST['font-color'];

    //Suppression des balises html
    $file = strip_tags($file);
    $titre = strip_tags($titre);
    $description = strip_tags($description);
    $bgcolor = strip_tags($bgcolor);
    $headerColor = strip_tags($headerColor);
    $h1 = strip_tags($h1);
    $fontcolor = strip_tags($fontcolor);
    
    //SUPPRESION DES ESPACES ET CARACTÈRES SPÉCIAUX DANS NOM DU FICHIER
    $search  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
    $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
    $file = str_replace($search, $replace, $file);
    $file = preg_replace('/[^A-Za-z0-9]/', '', $file);
    
    //Masquage du formulaire
    $formulaire = "";

    //CONTENU DE LA PAGE
    $contenu = '
    <!DOCTYPE html>
    <html>
        <head>
        <meta charset="utf-8" />
        <meta name="description" content="'.$description.'" />
        <title>'.$titre.'</title>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
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
    $fichier = fopen('generated-pages/'.$file.'.html', "w");

    //Cette ligne permet d'encoder le contenu en utf-8, pour les logiciels comme Excel qui n'utilisent pas cet encodage.
    $contenu = utf8_decode($contenu);

    // fwrite va écrire du contenu dans le fichier ouvert =>  fwirite($destination, $contenu).
    fwrite($fichier,$contenu);

    // fclose permet de refermer le fichier.
    fclose($fichier);

    //AFFICHAGE DU LIEN VERS LA PAGE CRÉÉE
    $gen_page_link = '<div><a href="generated-pages/'.$file.'.html">Cliquez ici pour visualiser la page</a></div>';

    //Message de confimation
    $confirmation = "Votre page a bien été créée.";
}

else
{
    $probleme_required = "Vous devez remplir tous les champs.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Script pour TinyMCE Text Editor-->
    <script src='https://cdn.tiny.cloud/1/pilhasnxmstiehuzueup4mqx75955r4kzfqerpja2u2lav16/tinymce/5/tinymce.min.js'
        referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

    <title>Générateur de pages web</title>

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <header>
        <h1>Générateur de page web</h1>
    </header>
    <main class="flex-center">
        <div class="flex-center">
            <div class="flex-column">
                <p class="avertissement"><?php echo($probleme_required); ?></p>
                <?php echo($formulaire); ?>
                <p class="confirmation"><?php echo($confirmation); ?></p>
                <?php echo($gen_page_link); ?>
                <div>
                    <a href="dashboard.php">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>