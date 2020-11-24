<?php
$name = 'Wara Massa,';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exo4</title>
</head>
<body>
    <!-- 1 la plus propre sans texte dans php -->
    <p>bonjour <?php echo $name; ?> comment vas tu ?</p>
    <!--2 meme chose avec le echo raccourcis -->
    <p>bonjour <?= $name; ?> comment vas tu ?</p>
    <!-- 3 avec concaténation -->
    <p><?php echo 'Bonjour '. $name . ' comment vas tu ? '; ?></p>
</body>
</html>