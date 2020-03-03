<?php

function modifImageUploadName(){
    $file = $_FILES["photo"]["name"];
    $renamed_file = "photo-".strtolower($user_nom);
    $file = $renamed_photo;
}

?>