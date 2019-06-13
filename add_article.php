<?php
    if($_COOKIE['login'] == '') {
        header('Location: ..\auth.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создать статью</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h3>Новая статья</h3>
            <form action="reg/add_article.php" method="post">
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" class="form-control">

                <label for="article">Текст статьи</label>
                <textarea name="text" id="text" class="form-control"></textarea>


                <button type="submit" class="btn btn-success mt-5">Добавить статью</button>
            </form>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php' ?>
</body>
</html>