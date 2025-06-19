<?php

$notes = [
    'maths' => 15,
    'francais' => 12,
    'histoire' => 14
];

var_dump($notes);

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
    <h1>Notes</h1>
    <?php foreach ($notes as $key => $note): ?>
        <div class="card-custom">
            <p>La note en <?php echo $key . ' est : ' . $note ?></p>
        </div>
    <?php endforeach; ?>

    <h2>Meilleure note</h2>
    <?php $maxNote = max($notes);
    // var_dump($maxNote);
    ?>
    <?php $key = array_search($maxNote, $notes);
    var_dump($key);
    ?>
    <p>La meilleure note en <?php echo $key . ' ' . 'est : ' . $maxNote ?></p>
</body>

</html>