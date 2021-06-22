<?php

$students = [
    [
        'name' => 'Domenico',
        'lastname' => 'Santo',
        'vote' => [7, 6, 8, 7, 8, 7, 6, 9]
    ],
    [
        'name' => 'Carmen',
        'lastname' => 'Russo',
        'vote' => [4, 5, 6, 7, 8, 9, 6, 5]
    ],
    [
        'name' => 'Nunzia',
        'lastname' => 'Gentile',
        'vote' => [4, 4, 5, 4, 6, 8, 7, 6]
    ],
    [
        'name' => 'Vittorio',
        'lastname' => 'Memeo',
        'vote' => [8, 7, 8, 7, 8, 8, 7, 8]
    ]

];
// foreach ($students as $student) {
//     $average = array_sum($student['vote']) / count($student['vote']);
//     echo $average;
//     echo $student['name'];
//     echo $student['lastname'];
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Alunni</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alunno {
            width: 350px;
            height: 250px;
            border-radius: 3px;
            background-color: #fa3456;
            margin: 2rem;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .alunno p {
            font-size: 1.2rem;
        }

        p>strong {
            font-weight: 900;
        }
    </style>
</head>

<body>
    <?php foreach ($students as $student) {
        $average = array_sum($student['vote']) / count($student['vote']); ?>
        <div class="alunno">
            <h2>Alunno: <?php echo $student['name'] . ' - ' . $student['lastname']; ?> </h2>
            <p>Media Scolastica: <strong> <?php echo $average; ?> </strong> </p>
        </div>
    <?php } ?>
</body>

</html>