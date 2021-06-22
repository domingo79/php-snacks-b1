<?php

$Arri_arri_cavallino = 'Arri arri cavallino per la strada del mulino. Il mulino è rovinato, il mugnaio s’è legato.
s’è legato alla catena, la sua moglie fa la cena. fa la cena per bambino: arri arri cavallino.';
$cavallino = explode('.', $Arri_arri_cavallino);

//var_dump($cavallino);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Arri arri Cavallino</h1>
        <?php foreach ($cavallino as $filastrocca) { ?>
            <p> <?php echo $filastrocca ?> </p>
        <?php } ?>
    </div>
</body>

</html>