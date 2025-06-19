<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mb-4">Les personnages et amis de Harry Potter</h1>
    <?php
    $data = file_get_contents("https://hp-api.onrender.com/api/characters");
    // var_dump($data);
    $dataDecode = json_decode($data, true);

    // var_dump($dataDecode);
    // $dataDecode->toto;
    // $dataDecode['toto'];
    ?>
    <div class="container mt-4">
        <div class="row align-items-stretch mb-4">
            <?php foreach ($dataDecode as $value): ?>
                <div class="col-md-4 mb-4">
                    <!-- carte -->
                    <div class="card h-100" style="width: 18rem;">

                        <?php if (!empty($value['image'])): ?>
                            <img src="<?php echo $value['image'] ?>" class="card-img-top" alt="personnage">
                        <?php else: ?>
                            <img class="card-img-top" src="./image/replace.jpeg" alt="pas de photo" />
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name'] ?></h5>
                            <p class="card-text"><?php echo $value['house'] ?></p>
                            <p class="card-text"><?php echo $value['dateOfBirth'] ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>