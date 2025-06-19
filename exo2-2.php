<?php

$personne = [
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Âge' => 25,
    'Ville' => 'Paris'
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="tableau">
        <table>

            <?php foreach ($personne as $key => $pers): ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td><?php echo $pers ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>