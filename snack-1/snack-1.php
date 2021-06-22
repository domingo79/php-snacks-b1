<?php
$LBA_semifinali = [
    [
        'squadra casa' => 'Olimpia Milano',
        'punti casa' => 88,
        'squadra ospite' => 'Trento',
        'punti ospite' => 62
    ],
    [
        'squadra casa' => 'Venezia',
        'punti casa' => 92,
        'squadra ospite' => 'Dinamo Sassari',
        'punti ospite' => 91
    ],
    [
        'squadra casa' => 'Virtus Bologna',
        'punti casa' => 91,
        'squadra ospite' => 'Universo Treviso',
        'punti ospite' => 72
    ],
    [
        'squadra casa' => 'Brindisi',
        'punti casa' => 85,
        'squadra ospite' => 'Trieste',
        'punti ospite' => 64
    ],

];
//var_dump(($LBA_semifinali));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semifinali LBA</title>
</head>

<body>
    <h1>Risultati Semifinali LBA</h1>

    <?php for ($i = 0; $i < count($LBA_semifinali); $i++) { ?>
        <div>
            <span><?= $LBA_semifinali[$i]['squadra casa'] . ' - ' . $LBA_semifinali[$i]['squadra ospite']; ?></span>
            <span>| <?= $LBA_semifinali[$i]['punti casa'] . ' - ' . $LBA_semifinali[$i]['punti ospite']; ?> </span>
        </div>
    <?php } ?>

</body>

</html>