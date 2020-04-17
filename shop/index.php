<?php
include "engine/database.php";
$login = $_COOKIE['login'];
$sql = "SELECT * FROM users WHERE `login`='$login'";
$res = mysqli_query($connection, $sql);
$table = mysqli_fetch_assoc($res);
$role = $table['role'];
?>
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
            <?php if ($_COOKIE['login'] == 'admin' && md5($_COOKIE['pass']=='21232f297a57a5a743894a0e4a801fc3')):?>
                <li><a class="clickMenu" href="admin.php">Панель администратора</a></li>
            <?php endif; ?>
            <?php if ($_COOKIE['login'] && $role == '0'):?>
            <li><a class="clickMenu" href="cart.php">Корзина</a></li>
            <?php endif; ?>
            </ul>
        </div>
        <div class="block-top-auth">
        <?php if ($_COOKIE['login']):?>
            <p><a href="profile.php"><?=$_COOKIE['login']?></a></p>
            <p><a href="engine/exit.php">Выход</a></p>
        <?php else:?>
        <p><a href="auth.php">Вход</a></p>
        <p><a href="registration.php">Регистрация</a></p>
        <?php endif; ?> 
        </div>
    </header>

    <div class="all_goods">
        <?= include "engine/goods.php"?>
    </div> 
</body> 
</html>