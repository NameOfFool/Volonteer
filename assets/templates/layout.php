<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">
    <title>Добро</title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
            </div>

            <nav class="nav">
                <a class="nav__link" href="index.php">Главная</a>
                <?php
                if(!isset($_COOKIE['user'])):
                    ?>
                    <a class="nav__link" href="auth.php">Войти</a>
                    <a class="nav__link" href="reg.php">Регистрация</a>
                <?php else:?>
                    <a class="nav__link" href="exit.php">Выйти</a>
                <?php endif;?>
            </nav>
        </div>
    </div>
</header>
<?=$main??""?>
<footer>
    <div class="footer-content">
        <div class="footer-logo-block">
            <img class="footer-logo" src="" alt="">
        </div>
        <div class="footer-links">
            <span class="links-title">Действия:</span>
            <a href="" class="link">Войти</a>
            <a href="" class="link">Зарегистрироваться</a>
        </div>
        <div class="footer-links">
            <span class="links-title">Ссылки:</span>
            <a href="" class="link">Стать волонтёром</a>
            <a href="" class="link">Сать организатором</a>
            <a href="" class="link">Получить помощь</a>
            <a href="" class="link">Поиск</a>
            <a href="" class="link">Мероприятия</a>
            <a href="" class="link">О нас</a>
        </div>
        <div class="footer-links">
            <span class="links-title">Контакты:</span>
            <a href="" class="link">+7 900 400-23-23</a>
            <a href="" class="link">+7 900 400-31-31</a>
            <div class="contacts-social-media">
                <a href=""><img src="../assets/image/templates-img/vk.svg" alt=""></a>
                <a href=""><img src="../assets/image/templates-img/ok.svg" alt=""></a>
                <a href=""><img src="../assets/image/templates-img/mail.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer-rights">
        <span>Название компании 2022. Все права защищены</span>
    </div>
</footer>
</body>
</html>