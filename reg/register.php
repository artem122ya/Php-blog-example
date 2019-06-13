<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
    if (strlen($login) <= 3 || strlen($email) <= 3 || strlen($password) <= 3)
    {
        exit();
    }

    $hash = 'blog';
    $password = md5($password . $hash);

    require_once '../mysql_connect.php';


    $sql = 'INSERT INTO users(login, email, password) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $email, $password]);
    header('Location: ..\index.php');
