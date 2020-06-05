<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 6 Exercice 4</title>
</head>
<body>
    <a href="index.php?language=PHP&amp;server=LAMP">Cliquez pour passer les paramètres dans l'url</a>

    <p><?php echo (isset($_GET['language'])) ? $_GET['language'] : 'La variable "language" n\'existe pas !'; ?></p>
    <p><?php echo (isset($_GET['server'])) ? $_GET['server'] : 'La variable "server" n\'existe pas !'; ?></p>

</body>
</html>