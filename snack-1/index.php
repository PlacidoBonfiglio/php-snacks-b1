<!-- PHP -->
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
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks b1</title>
</head>

<body>
    <main>

        <!-- ciclo all'interno dell array, il quale al suo interno ha degli altri array -->
        <?php foreach ($posts as $postDate => $postsInDate) { ?>
        <article>

            <h2>Post written on the <?php echo $postDate ?></h2>

            <ul>

                <!-- ciclo in ogni array all'interno di postsInDate -->
                <?php foreach ($postsInDate as $post) { ?>
                <li>
                    <h3><?php echo $post["title"] ?></h3>

                    <h4><?php echo $post["author"] ?></h4>

                    <p><?php echo $post["text"] ?></p>
                </li>
                <?php } ?>

            </ul>
        </article>
        <?php } ?>

    </main>
</body>

</html>