<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 6 Exercice 3</title>
</head>
<body>
    <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Cliquez pour passer les paramètres dans l'url</a>

    <p><?php echo (isset($_GET['startDate'])) ? $_GET['startDate'] : 'La variable "startDate" n\'existe pas !'; ?></p>
    <p><?php echo (isset($_GET['endDate'])) ? $_GET['endDate'] : 'La variable "endDate" n\'existe pas !'; ?></p>

</body>
</html>