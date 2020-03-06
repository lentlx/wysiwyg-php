<?php

include "functions-library/rename-photo.php";
include "forms-library/add-admin-form.php";

//Variables du nouveau compte
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$photo = $_FILES['photo'];
$email = $_POST['email'];
$password = $_POST['password'];

$compte_admin = ucfirst(strtolower($prenom))." ".strtoupper($nom);

if(!empty($_POST["civilite"]) and !empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["email"]) and !empty($_POST["password"])){
    if(!empty($_FILES)){

        $file = $_FILES["photo"]["name"];
        $tmp_file = $_FILES["photo"]["tmp_name"];
        $type = $_FILES["photo"]["type"];
        $size = $_FILES["photo"]["size"];
        $error = $_FILES["photo"]["error"];
        $file_dir = 'user-avi/';

        //Suppression des balises html
        $civilite = strip_tags($civilite);
        $nom = strip_tags($nom);
        $prenom = strip_tags($prenom);
        $email = strip_tags($email);
        $password = strip_tags($password);
        $file = strip_tags($file);
    
        //Trouver l'extension du fichier
        $position = strrpos($file, ".") + 1;
        $extension = substr($file, $position);
        $extension_tab = array("jpg","jpeg","png","gif");
    
        if($error != 0){
            $probleme = "Le fichier n'a pas été téléchargé !";
        }
    
        elseif(!in_array($extension, $extension_tab)){
            $probleme = "L'extension du fichier n'est pas supportée !";
        }
    
        else{
            //Renommage de la photo de profil du nouvel admin
            $renamed_file = "photo-".strtolower($prenom).".".$extension;
            $file = $renamed_file;
            move_uploaded_file($tmp_file, $file_dir.$file);
            
            //Ajout du nouvel admin dans le fichier csv
            $fichier = fopen("identifiers-sheet.csv", "a");
            $contenu = $civilite.';'.$nom.';'.$prenom.';'.$email.';'.$password.';'.$file."\n";
            $contenu = utf8_decode($contenu);
            fwrite($fichier, $contenu);
            fclose($fichier);

            //Masquage du formulaire et affichage d'un message de confirmation
            $formulaire = "";
            $confirmation = "Le compte administrateur de $compte_admin a bien été créé.";
        }
    }
}

else{
    $probleme_required = "Vous devez remplir tous les champs.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="images/fingerprint.png">

    <title>Créer un nouveau compte administrateur</title>

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <header>
        <h1>Créer un nouveau compte administrateur</h1>
    </header>
    <main>
        <div class="flex-center">
            <div class="flex-column">
                    <p class="avertissement"><?php echo($probleme_required); ?></p>
                    <p class="avertissement"><?php echo($probleme); ?><p>
                    <?php echo($formulaire); ?>
                    <p class="confirmation"><?php echo($confirmation); ?></p>
                    <a href="dashboard.php">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>