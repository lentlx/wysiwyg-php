<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Script pour TinyMCE Text Editor-->
    <script src='https://cdn.tiny.cloud/1/pilhasnxmstiehuzueup4mqx75955r4kzfqerpja2u2lav16/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

    <title>Générateur de pages web</title>

    <!--Favicon-->
    <link rel="icon" type="img/gif" href="fingerprint.png">

    <!--Fonts import-->
    <link rel="stylesheet" href="https://use.typekit.net/htg5uml.css">

    <!--CSS import-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Générateur de page web</h1>
    </header>
    <main class="flex-center">
        <form action="page-file-generator.php" method="post">
            <div>
                <label>Choisissez le nom du fichier<span class="required_el">*</span> :</label>
                <input type="text" placeholder="Votre nom de fichier ici" name="file" required>
            </div>
            <div>
                <label>Choisissez une couleur d'arrière plan<span class="required_el">*</span> :</label>
                <input type="color" value="#ffffff" name="bg-color">
            </div>
            <div>
                <label>Choisissez une couleur d'entête<span class="required_el">*</span> :</label>
                <input type="color" name="header-color">
            </div>
            <div>
                <label>Choisissez la couleur de la police<span class="required_el">*</span> :</label>
                <input type="color" name="fontcolor">
            </div>
            <div>
                <label>Choisissez le titre de l'onglet<span class="required_el">*</span> :</label>
                <input type="text" placeholder="Votre titre ici" name="titre" required>
            </div>
            <div>
                <label>Choisissez le titre (h1) de la page<span class="required_el">*</span> :</label>
                <input type="text" placeholder="Votre h1 ici" name="h1" required>
            </div>
            <div>
                <label>Choisissez le contenu du corps de texte<span class="required_el">*</span> :</label>
                <textarea id="mytextarea" name="mytextarea" required>
                    <h2>Saisissez un titre</h2>
                    Saisissez le contenu de votre page ici.
                </textarea>
            </div>
            <div>
                <input id="submit" type="submit" value="Créer la page"></input>
            </div>
        </form>
    </main>
</body>

</html>