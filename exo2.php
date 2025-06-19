<?php

$personne = [
    [
        'nom' => 'Dupont',
        'prenom' => 'Alice',
        'age' => 25,
        'ville' => 'Paris'
    ],
    [
        'nom' => 'Marie',
        'prenom' => 'Bleu',
        'age' => 25,
        'ville' => 'Lyon'
    ],
    [
        'nom' => 'Pierre',
        'prenom' => 'Vert',
        'age' => 40,
        'ville' => 'Marseille'
    ]
];
var_dump($personne);
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
    <h1>Comptes</h1>
    <?php foreach ($personne as $item): ?>
        <div class="card-custom">
            <p>Je suis <?php echo $item['nom'] . ' ' . $item['prenom'] ?></p>
            <p>J'ai <?php echo $item['age'] ?> ans</p>
            <p>Je vis à <?php echo $item['ville'] ?></p>
        </div>
    <?php endforeach; ?>
</body>

</html>