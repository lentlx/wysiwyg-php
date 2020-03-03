<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Espace Client</title>

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="images/fingerprint.png">

    <!--Fonts import-->
    <link rel="stylesheet" href="https://use.typekit.net/htg5uml.css">

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <header>
        <h1>Dashboard</h1>
        <p>Bonjour, nom_utilisateur. Bienvenue sur votre espace d\'administration.</p>
    </header>
    <main id="dashboard">
        <p>
            Ici, vous pouvez gérer les comptes administrateurs et créer de nouvelles pages web à l\'aide du
            générateur.
        </p>
        <div>
            <div class="admin-card">
                <h2>Espace administrateur</h2>
                <ul>
                    <li><a href="add-admin.php">Créer un nouveau compte administrateur</a></li>
                    <li>Gérer les comptes administrateurs existants</li>
                </ul>
            </div>
            <div class="admin-card">
                <h2>Création & Gestion</h2>
                <ul>
                    <li><a href="page-form-generator.html">Générateur de page web</a></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>