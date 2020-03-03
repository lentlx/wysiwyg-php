<?php

include "functions-library/rename-photo.php";

$formulaire = '<form method="post" action="add-admin.php" enctype="multipart/form-data">
<div>
    <label for="newsletter">Civilité<span class="required_el">*</span></label>
    <span>
        <input type="radio" name="civilite" id="1" value="homme">Madame
    </span>
    <span>
        <input type="radio" name="civilite" id="2" value="femme">Monsieur
    </span>
</div>
<div>
    <label for="nom">Nom<span class="required_el">*</span></label>
    <input type="text" name="nom" id="nom" required />
</div>
<div>
    <label for="prenom">Prénom<span class="required_el">*</span></label>
    <input type="text" name="prenom" id="prenom" required />
</div>
<div>
    <label>Importer une photo de profil<span class="required_el">*</span> :</label>
    <input type="file"name="photo" required>
</div>
<div>
    <label for="mail">E-mail<span class="required_el">*</span></label>
    <input type="email" name="email" id="email" required />
</div>
<div>
    <label for="password">Mot de passe<span class="required_el">*</span></label>
    <input type="text" name="password" id="password" required />
</div>
<div>
    <input type="submit" value="Créer le compte">
</div>
</form>
<div>';

if(!empty($_FILES)){

    $file = $_FILES["photo"]["name"];
    $tmp_file = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];
    $error = $_FILES["photo"]["error"];
    $file_dir = 'user-avi/';

    //Variables du nouveau compte
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $photo = $_POST['photo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $compte_admin = ucfirst(strtolower($prenom))." ".strtoupper($nom);

    //Trouver l'extension du fichier
    $position = strrpos($file, ".") + 1;
    $extension = substr($file, $position);
    $extension_tab = array("jpg","jpeg","png","gif");

    if($error != 0){
        $probleme = "Le fichier n'a pas été téléchargé";
    }

    elseif(!in_array($extension, $extension_tab)){
        $probleme = "L'extension du fichier n'est pas supportée !";
    }

    else{
        modifImageUploadName();
        move_uploaded_file($tmp_file, $file_dir.$file);
        $confirmation = "Le compte administrateur de $compte_admin a bien été créé.";
        $formulaire = "";
    }
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