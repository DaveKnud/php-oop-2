<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("./data/db.php") ?>
</head>

<body>
    <!-- STAMPA CIBO -->
    <?php
    foreach ($foods as $food) {
    ?>
        <div>
            <h1>
                <?php echo $food->getName(); ?>
            </h1>
            <div>Peso :<?php echo $food->getWeight(); ?> KG</div>
            <div>Prezzo: <?php echo $food->getPrice(); ?> $ </div>
            <div>Data scadenza: <?php echo $food->getExpireDate(); ?> </div>
        </div>
    <?php

    }
    ?>
    <!-- STAMPA GIOCATTOLO -->
    <?php
    foreach ($toys as $toy) {
    ?>
        <h1>
            <?php echo $toy->getName(); ?>
        </h1>
        <div>Peso :<?php echo $toy->getWeight(); ?> KG </div>
        <div>Prezzo: <?php echo $toy->getPrice(); ?> $ </div>
    <?php
    }
    ?>
</body>

</html>