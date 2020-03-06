<?php

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
    <input type="text" name="nom" id="nom" value="'.$_POST["nom"].'" required>
</div>
<div>
    <label for="prenom">Prénom<span class="required_el">*</span></label>
    <input type="text" name="prenom" id="prenom" value="'.$_POST["prenom"].'" required>
</div>
<div>
    <label>Importer une photo de profil<span class="required_el">*</span> :</label>
    <input type="file"name="photo" value="'.$_POST["photo"].'" required>
</div>
<div>
    <label for="mail">E-mail<span class="required_el">*</span></label>
    <input type="email" name="email" id="email" value="'.$_POST["email"].'" required>
</div>
<div>
    <label for="password">Mot de passe<span class="required_el">*</span></label>
    <input type="text" name="password" id="password" value="'.$_POST["password"].'" required>
</div>
<div>
    <input type="submit" value="Créer le compte">
</div>
</form>
<div>';

?>