<?php

$personne = [
    [
        'nom' => 'Jean',
        'prenom' => 'Rouge',
        'age' => 35
    ],
    [
        'nom' => 'Marie',
        'prenom' => 'Bleu',
        'age' => 25
    ],
    [
        'nom' => 'Pierre',
        'prenom' => 'Vert',
        'age' => 40
    ]
]
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
    <nav>
        <ul>
            <li><a href="index.php">Exercice Jour2.md numéro 1</a></li>
            <li><a href="exo2.php">Exercice Jour2.md numéro 2</a></li>
            <li><a href="exo3.php">Exercice Jour2.md numéro 3 et 4</a></li>
            <li><a href="exo5.php">Exercice Jour2.md numéro 5</a></li>
            <li><a href="exo1-1.php">Exercice Jour2-2.md numéro 1 et 2</a></li>
            <li><a href="exo2-2.php">Exercice Jour2-2.md numéro 3</a></li>
            <li><a href="exo3-3.php">Exercice Jour2-2.md numéro 4</a></li>
            <li><a href="exo4-4.php">Exercice Jour2-2.md numéro 5</a></li>
            <li><a href="exo5-1.php">Exercice Jour2-3.md numéro Harry Potter</a></li>
        </ul>
    </nav>
    <h1>Comptes</h1>

    <?php foreach ($personne as $item): ?>
        <div class="card-custom">
            <p>Je suis <?php echo $item['nom'] . ' ' . $item['prenom'] ?></p>
            <p>J'ai <?php echo $item['age'] ?> ans</p>
        </div>
    <?php endforeach; ?>
</body>

</html>