<?php

function modifImageUploadName(){
    $file = $_FILES["photo"]["name"];
    $renamed_file = "photo-".strtolower($nom);
    $file = $renamed_file;
}

?>