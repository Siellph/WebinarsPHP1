<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/admin.css">
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
                <li><a class="clickMenu" href="addgood.php">Добавить товар</a></li>
                <li><a class="clickMenu" href="admin.php">Каталог</a></li>
                <li><a class="clickMenu" href="#" class="cart">Корзина</a></li>
            </ul>
        </div>
        <div class="block-top-auth">
            <p><a href="#">Вход</a></p>
            <p><a href="#">Регистрация</a></p>
        </div>
    </header>

    <div class="all_goods">
        <?= include "engine/editgoods.php"?>
        <-------I don't know, что это за единица и откуда она взялась 
    </div> 
</body> 
</html>