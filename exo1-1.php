<?php
$fruits = ['Pomme', 'Banane', 'Cerise'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $titre = "Bienvenue sur mon site"; ?>

    <h1><?php echo $titre ?></h1>

    <h2>Liste des fruits</h2>
    <ul>
        <?php foreach ($fruits as $fruit): ?>
            <li><?php echo $fruit ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>