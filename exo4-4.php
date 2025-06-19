<?php

$menu = [
    'Google' => 'https://google.fr',
    'Amazon' => 'https://www.amazon.fr/',
    'Spotify' => 'https://open.spotify.com/intl-fr',
    'Youtube' => 'https://www.youtube.com/'
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
    <nav>
        <ul>
            <?php foreach ($menu as $key => $ul): ?>
                <li>
                    <a href="<?php echo $ul ?>" target="_blank"><?php echo $key ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

</body>

</html>