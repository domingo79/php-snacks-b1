<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: space-evenly;
        }

        .teachers {
            width: 400px;
            height: 250px;
            background-color: #464646;
            margin: 1rem;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pm {
            width: 400px;
            height: 250px;
            background-color: #2f862f;
            margin: 1rem;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="teachers">
        <?php foreach ($db['teachers'] as $teacher) { ?>
            <h3>Teacher: <?php echo $teacher['name'] . ' - ' . $teacher['lastname']; ?> </h3>
        <?php } ?>

    </div>

    <div class="pm">
        <?php foreach ($db['pm'] as $pm) { ?>
            <h3>Pm: <?php echo $pm['name'] . ' - ' . $pm['lastname']; ?> </h3>
        <?php } ?>

    </div>

</body>

</html>