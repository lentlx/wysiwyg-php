<?php
session_start();

if(!isset($_SESSION["user"])){
    header("location:login.php");
    exit;
}

if(isset($_POST["logout"])){
    session_unset();
    header("location:login.php");
}

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
        <p>Bonjour, <?php echo($_SESSION["user"]); ?>. Bienvenue sur votre espace d'administration.</p>
        <form method="post" action="dashboard.php">
            <div>
                <input type="submit" name="logout" value="Se déconnecter">
            </div>
        </form>
    </header>
    <main id="dashboard">
        <p>
            Ici, vous pouvez gérer les comptes administrateurs et créer de nouvelles pages web à l'aide du
            générateur.
        </p>
        <div>
            <div class="admin-card">
                <h2>Espace administrateur</h2>
                <ul>
                    <li><a href="add-admin.php">Créer un nouveau compte administrateur</a></li>
                    <li><a href="admin-list.php">Gérer les comptes administrateurs existants</a></li>
                </ul>
            </div>
            <div class="admin-card">
                <h2>Création & Gestion</h2>
                <ul>
                    <li><a href="page-generator.php">Générateur de page web</a></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>