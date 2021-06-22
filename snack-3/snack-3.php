<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
//var_dump($posts);

/*foreach ($posts as $date => $post) {
    echo $date;

    foreach ($post as $post_details) {
        echo $post_details['title'];
        echo $post_details['author'];
        echo $post_details['text'];
    }
}*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa post</title>
</head>

<body>

    <?php foreach ($posts as $Date => $post) { ?>
        <h2>Post in data: <?php echo $Date; ?></h2>

        <?php foreach ($post as $post_details) { ?>
            <ul>
                <li> <?php echo $post_details['title']; ?> </li>
                <li> <?php echo $post_details['author']; ?> </li>
                <li> <?php echo $post_details['text']; ?> </li>
            </ul>
        <?php } ?>
    <?php } ?>


</body>

</html>