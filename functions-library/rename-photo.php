<?php

function modifImageUploadName(){
    $name_file = $_FILES['fichier']['name'];
    $renamed_photo = "photo-".strtolower($nom);
    $name_file = $renamed_photo;
}

?>