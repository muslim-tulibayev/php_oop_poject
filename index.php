<?php

use Src\Post;

require_once 'bootstrap.php';

$posts = Post::getAll();

var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= env('APP_NAME') ?></title>
</head>

<body>
    <h1><?= env('TITLE', 'OOP Blog') ?></h1>
</body>

</html>