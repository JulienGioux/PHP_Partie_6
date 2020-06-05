<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 6 Exercice 6</title>
</head>
<body>
    <a href="index.php?building=12&amp;room=101">Cliquez pour passer les paramètres dans l'url</a>

    <p><?php echo (isset($_GET['building'])) ? $_GET['building'] : 'La variable "building" n\'existe pas !'; ?></p>
    <p><?php echo (isset($_GET['room'])) ? $_GET['room'] : 'La variable "room" n\'existe pas !'; ?></p>

</body>
</html>