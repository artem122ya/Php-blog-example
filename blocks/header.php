<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a class="main-page-link" href="/">Мой блог</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">

        </nav>
        <?php
        if($_COOKIE['login'] == ''):
        ?>
        <a class="btn btn-outline-primary  mr-1" href="auth.php">Войти</a>
        <a class="btn btn-outline-primary" href="reg.php">Зарегестрироваться</a>
        <?php
        else:
        ?>
            <a class="p-2 text-dark" href="add_article.php">Добавить статью</a>
            <a class="btn btn-outline-primary  mr-1" href="auth.php">Кабинет пользователя</a>
        <?php
        endif;
        ?>
    </div>
</header>