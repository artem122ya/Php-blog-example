<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Прочитать статью</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php
            require_once 'mysql_connect.php';

            $sql = 'SELECT * FROM `articles` WHERE id = :id';
            $query = $pdo->prepare($sql);
            $query->execute(['id' => $_GET['id']]);
            $article = $query->fetch(PDO::FETCH_OBJ);
            ?>

            <div class="jumbotron">
                <h1><?=$article->title?></h1>
                <p><b>Автор: </b><mark><?=$article->author?></mark></p>
                <p><?=$article->text?></p>
            </div>

        </div>
        <?php require 'blocks/aside.php' ?>
    </div>
</main>
<?php require 'blocks/footer.php' ?>
</body>
</html>