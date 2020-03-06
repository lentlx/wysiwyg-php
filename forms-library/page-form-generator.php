<?php

//Formulaire
    $formulaire = '<form action="page-generator.php" method="post">
                    <div>
                        <label>Choisissez le nom du fichier<span class="required_el">*</span> :</label>
                        <input type="text" placeholder="Votre nom de fichier ici" name="file" required value="'.$_POST["file"].'">
                    </div>
                    <div>
                        <label>Choisissez une couleur d\'arrière plan<span class="required_el">*</span> :</label>
                        <input type="color" value="#ffffff" name="bg-color">
                    </div>
                    <div>
                        <label>Choisissez une couleur d\'entête<span class="required_el">*</span> :</label>
                        <input type="color" name="header-color" value="'.$_POST["header-color"].'">
                    </div>
                    <div>
                        <label>Choisissez la couleur de la police<span class="required_el">*</span> :</label>
                        <input type="color" name="font-color" value="'.$_POST["font-color"].'">
                    </div>
                    <div>
                        <label>Choisissez le titre de l\'onglet<span class="required_el">*</span> :</label>
                        <input type="text" placeholder="Votre titre ici" name="titre" value="'.$_POST["titre"].'" required>
                    </div>
                    <div>
                        <label>Choisissez la description de la page<span class="required_el">*</span> :</label>
                        <input type="text" placeholder="Votre description ici" name="description" value="'.$_POST["description"].'" required>
                    </div>
                    <div>
                        <label>Choisissez le titre (h1) de la page<span class="required_el">*</span> :</label>
                        <input type="text" placeholder="Votre h1 ici" name="h1" value="'.$_POST["h1"].'" required>
                    </div>
                    <div>
                        <label>Choisissez le contenu du corps de texte<span class="required_el">*</span> :</label>
                        <textarea id="mytextarea" name="mytextarea" value="'.$_POST["mytextarea"].'" required>
                            <h2>Saisissez un titre</h2>
                            Saisissez le contenu de votre page ici.
                        </textarea>
                    </div>
                    <div>
                        <input id="submit" type="submit" value="Créer la page"></input>
                    </div>
                </form>
                ';

?>