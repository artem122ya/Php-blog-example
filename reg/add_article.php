<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));


$hash = 'blog';
$password = md5($password . $hash);

require_once '../mysql_connect.php';


$sql = 'INSERT INTO articles(title, text, date, author) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$title, $text, time(), $_COOKIE['login']]);
header('Location: ..\index.php');
