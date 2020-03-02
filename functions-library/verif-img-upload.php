<?php

include 'rename-photo.php';


function verifImageUpload() {
    if(isset($_POST['photo']))
    {
        $file_dir = 'user-avi/';
        $tmp_file = $_FILES['fichier']['tmp_name'];
        $name_file = $_FILES['fichier']['name'];

        echo($tmp_file);
/*
        if(!is_uploaded_file($tmp_file)){
            exit("Le fichier n'a pas été uploadé.");
        }

        // Vérification des caractères spéciaux pour maximiser la sécurité
        // liée à l'upload de scripts malveillants
        if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file))
        {
            exit("Nom de fichier non valide");
        }
        else if( !move_uploaded_file($tmp_file, $file_dir.$name_file))
        {
            exit("Impossible de copier le fichier dans $file_dir");
        }
        
        // Vérification du type de fichier
        $type_file = $_FILES["fichier"]["type"];

        if( pathinfo($type_file != 'jpg') && pathinfo($type_file != 'jpeg') && pathinfo($type_file != 'png') && pathinfo($type_file != 'gif') )
        {
            exit("Le fichier n'est pas une image");
        }

        // Renomme le fichier selon le schéma souhaité
        modifImageUploadName();

        //Déplace le fichier dans son fichier de destination
        move_uploaded_file($tmp_file, $file_dir.$name_file);
        */
    }
}

?>