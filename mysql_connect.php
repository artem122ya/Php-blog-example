<?php

    $user = 'root';
    $dbpassword = 'root';
    $db = 'users';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;

    $pdo = new PDO($dsn, $user, $dbpassword);