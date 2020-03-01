<?php

function verifImageUpload() {

}
if(isset($_POST['photo']))
{
    $file_dir = 'user-avi/';
    $tmp_file = $_FILES['fichier']['tmp_name'];

    if(!is_uploaded_file($tmp_file)){
        exit("Le fichier n'a pas été uploadé.");
    }
    
    $type_file = $_FILES["fichier"]["type"];

    if( pathinfo($type_file != 'jpg') && pathinfo($type_file != 'jpeg') && pathinfo($type_file != 'png') && pathinfo($type_file != 'gif') )
    {
        exit("Le fichier n'est pas une image");
    }

    $name_file = $_FILES['fichier']['name'];


}

function modifImageUploadName(){
    $name_file = $_FILES['fichier']['name'];
    
}




?>