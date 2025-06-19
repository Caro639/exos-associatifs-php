<?php

$produits = [
    [
        'nom' => 'Chaise',
        'stock' => 5
    ],
    [
        'nom' => 'Table',
        'stock' => 0
    ],
    [
        'nom' => 'Lampe',
        'stock' => 3
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Meubles</h1>

    <ul>
        <?php foreach ($produits as $produit): ?>
            <?php if ($produit['stock'] === 0): ?>
                <li>Rupture de stock</li>
            <?php else: ?>
                <li><?php echo $produit['nom'] ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>