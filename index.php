<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
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

                    $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
                    $query = $pdo->query($sql);
                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                        $text = mb_substr($row->text, 0, 200, "utf-8");
                        echo "<h2>$row->title</h2>
                            <p>$text</p>
                            <p><b>Автор: </b><mark>$row->author</mark></p>
                            <a href='article.php?id=$row->id'>
                                <button class='btn btn-warning mb-5'>Прочитать больше</button>
                            </a>";
                    }

                ?>
            </div>
            <?php require 'blocks/aside.php' ?>
        </div>
    </main>
    <?php require 'blocks/footer.php' ?>
</body>
</html>