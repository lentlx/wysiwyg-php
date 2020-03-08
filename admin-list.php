<?php
session_start();

if(!isset($_SESSION["user"])){
    header("location:login.php");
    exit;
}

$admin_csv = array_map('str_getcsv', file('identifiers-sheet.csv'));

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
        <h1>Liste des administrateurs</h1>
        <p>Vous êtes connecté avec le compte <?php echo($_SESSION["user"]); ?>.</p>
    </header>
    <main id="admin-list">
        <p>
            Ici, vous pouvez visualiser la liste des comptes administrateurs.
        </p>
        <div>
            <?php 
                for($i = 0; $i < count($admin_csv); $i++){
                    echo'
                        <div class="admin-card">
                            <img src="user-avi/'.$admin_csv[$i][5].'">
                            <ul>
                                <li>Civilité : '.$admin_csv[$i][0].'</li>
                                <li>Prénom : '.$admin_csv[$i][2].'</li>
                                <li>Nom : '.$admin_csv[$i][1].'</li>
                                <li>E-mail : '.$admin_csv[$i][3].'</li>
                                <li>Mot de passe : '.$admin_csv[$i][4].'</li>
                            </ul>
                        </div>
                    ';
                }
            ?>
        </div>
        <a class="home" href="dashboard.php">Retour à l'accueil</a>
    </main>
</body>
</html>