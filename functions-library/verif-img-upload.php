<?php

include "functions-library/rename-photo.php";

//Variables du nouveau compte
$civilite = $_POST['civilite'];
$user_nom = $_POST['nom'];
$user_prenom = $_POST['prenom'];
$photo = $_POST['photo'];
$email = $_POST['email'];
$password = $_POST['password'];

$compte_admin = ucfirst(strtolower($user_prenom))." ".strtoupper($user_nom);

if(!empty($_FILES)){

    $file = $_FILES["photo"]["name"];
    $tmp_file = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];
    $error = $_FILES["photo"]["error"];
    $file_dir = 'user-avi/';

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
    }
}

?>