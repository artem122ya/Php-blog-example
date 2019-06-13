<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Войти</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php
                if($_COOKIE['login'] == ''):
            ?>
            <h3>Авторизация</h3>
            <form action="reg/auth.php" method="post">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="form-control">

                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" class="form-control">

                <button type="submit" class="btn btn-success mt-5">Войти</button>
            </form>
            <?php
                else:
            ?>
                <h2><?=$_COOKIE['login']?></h2>
                <form action="reg/exit.php">
                    <button type="submit" class="btn btn-danger">Выйти</button>
                </form>

            <?php
                endif;
            ?>
        </div>
    </div>
</main>
<?php require 'blocks/footer.php' ?>
</body>
</html>