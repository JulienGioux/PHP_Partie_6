<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 6 Exercice 1</title>
</head>
<body>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">url</a>
    <?php
        function showName($fName, $lName) {
                return $fName . ' ' . $fName;
            }
        


    ?>
    <p><?php echo (isset($_GET['firstname']) && isset($_GET['lastname'])) ? showName($_GET['firstname'], $_GET['lastname']) : 'Cliquez !'; ?></p>
</body>
</html>