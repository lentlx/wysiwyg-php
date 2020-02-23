<?php

// fopen permet d'ouvrir un fichier sur le gestionnaire de fichiers ou le serveur. 
//Cela permet d'apporter des modifications dans un fichier grâce au php.
// Si le fichier n'existe pas,la fonction le crée.
$fichier = fopen("identifiers-sheet.csv", "w");

$contenu = "Civilité;Nom;Prénom;Mail;Mot de passe;Photo\n";
//$contenu .= "2;Système;Administrateur;admin@eemi.com;password;photo-administrateur.jpg\n";

//Cette ligne permet d'encoder le contenu en utf-8, pour les logiciels comme Excel qui n'utilisent pas cet encodage.
$contenu = utf8_decode($contenu);

// fwrite va écrire du contenu dans le fichier ouvert =>  fwirite($destination, $contenu).
fwrite($fichier,$contenu);

// fclose permet de refermer le fichier.
fclose($fichier);

// On affiche OK une fois la fonction éxécutée.
echo("OK");

?>