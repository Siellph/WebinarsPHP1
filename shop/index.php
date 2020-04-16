<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <title>shop</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <span class="use">shop</span>
            </a>
        </div>

        <div class="top-menu">
            <ul>
                <li><a class="clickMenu" href="index.php">Каталог</a></li>
            </ul>
        </div>
        <div class="block-top-auth">
            <p><a href="auth.php">Вход</a></p>
            <p><a href="registration.php">Регистрация</a></p>
        </div>
    </header>

    <div class="all_goods">
        <?= include "engine/goods.php"?>
        <-------I don't know, что это за единица и откуда она взялась 
    </div> 
</body> 
</html>