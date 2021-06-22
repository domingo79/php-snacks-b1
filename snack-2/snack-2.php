<?php

$_GET["name"];
$_GET["mail"];
$_GET["age"];

$name;
$mail;
$age;

//controllo che name sia più lungo di 3 caratteri
if (strlen($_GET["name"]) > 3) {
    $name = true;
} else {
    $name = false;
};
//che mail contenga un punto e una chiocciola 
if (strpos($_GET["mail"], '@') && strpos($_GET["mail"], '.')) {
    $mail = true;
} else {
    $mail = false;
};

//che age sia un numero. 
if (is_numeric($_GET["age"])) {
    $age = true;
} else {
    $age = false;
};


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
    <h1>Controllo accesso</h1>
    <p>
        <?php
        if ($name == true && $mail == true && $age == true) {
            echo 'accesso consentito';
        } else {
            echo 'accesso NEGATO!';
        };
        ?>
    </p>

</body>

</html>