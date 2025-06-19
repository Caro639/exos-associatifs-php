<?php

$couleurs = [
    'rouge' => '#FF0000',
    'bleu' => '#0000FF',
    'vert' => '#00FF00',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-custom {
            padding: 20px;
            border: 1px solid red;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php foreach ($couleurs as $key => $couleur): ?>
        <div class="card-custom">
            <p>La couleur est : <strong><?php echo $key ?></strong></p>
            <p>La couleur en hexadécimal est : <strong><?php echo $couleur ?></strong></p>
        </div>
    <?php endforeach; ?>

    <?php $couleursInverse = array_flip($couleurs);
    var_dump($couleursInverse);
    ?>

    <?php foreach ($couleursInverse as $key => $couleur): ?>
        <div class="card-custom">
            <p>La couleur est : <strong><?php echo $key ?></strong></p>
            <p>La couleur en hexadécimal est : <strong><?php echo $couleur ?></strong></p>
        </div>
    <?php endforeach; ?>
</body>

</html>