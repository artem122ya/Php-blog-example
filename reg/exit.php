<?php
    setcookie('login', "", time() - 3600 * 24 * 30, '/');
    unset($_COOKIE['login']);
    header('Location: ..\auth.php');