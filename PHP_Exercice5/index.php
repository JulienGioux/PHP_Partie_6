<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 6 Exercice 5</title>
</head>
<body>
    <a href="index.php?week=12">Cliquez pour passer les paramètres dans l'url</a>

    <p><?php echo (isset($_GET['week'])) ? $_GET['week'] : 'La variable "week" n\'existe pas !'; ?></p>
</body>
</html>