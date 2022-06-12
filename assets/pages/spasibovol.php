<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">  
    <link href="https://fonts.googleapis.com/css?family=Manrope&display=swap" rel="stylesheet">    
    <title>Добро (не для чурок и турков)</title>
    <style>
.btn {
    width: 400px;
    height: 550px;
}
.btn p {
    color: #fff;
}
.btn:hover {
    background-color: #49B9DC;
    color: white;
}
.but {
    display: inline-block;
    vertical-align: top;
    padding: 14px 45px;
    background-color: #0D79DD;
    font-size: 18px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border-radius: 21px;
}
.but:hover {
    background-color: #2c89de;
}
	</style>
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
 if($_COOKIE['user'] == ''):
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

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <div class="btn"><p style="font-size: 40px; margin-top: 50px;">Спасибо</p>
            <p style="font-size: 30px; margin-top: 50px;">Вы делаете мир лучше</p>
            <a class="but" href="auth.php">Войти</a> 
        </div>
        </div>          
    </div>
</body>
</html>