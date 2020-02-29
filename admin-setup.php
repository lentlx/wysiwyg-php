<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Créer un nouveau compte administrateur</title>

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <!--Fonts import-->
    <link rel="stylesheet" href="https://use.typekit.net/htg5uml.css">

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
                <form method="POST" action="confirm_inscirption.html">
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
                        <label for="nom">Mot de passe<span class="required_el">*</span></label>
                        <input type="text" name="nom" id="nom" required />
                    </div>
                    <div>
                        <input type="submit" value="Créer le compte">
                    </div>
                </form>
                <div>
                    <a href="dashboard.php">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>