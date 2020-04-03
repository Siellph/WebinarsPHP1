<?php
include "engine/database.php";
$id = $_GET['id'];
$sql = "SELECT * FROM goods WHERE id = $id";
$result = mysqli_query($connection, $sql);
$full_good = mysqli_fetch_assoc($result);
$good_title = $full_good['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style_for_onegood.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/feed.css">
    <title><?=$good_title?></title>
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
                <li><a class="clickMenu" href="#">Ссылка1</a></li>
                <li><a href="#">Ссылка2</a></li>
                <li><a href="#">Ссылка3</a></li>
                <li><a href="#" class="cart">Корзина</a></li>
            </ul>
        </div>
        <div class="block-top-auth">
            <p><a href="#">Вход</a></p>
            <p><a href="#">Регистрация</a></p>
        </div>
    </header>
    <?php
    include "engine/onegood.php";
    ?>
    <div class="feedback">
        <div class="feed_left">
        <?php
        include "engine/feedback.php";
        ?>
        </div>
        <div class="feed_right">
            <form action="engine/addfeedback.php" method="GET">
            <input class="textbox" type="text" placeholder="Введите имя">
            <div class="select_score">Выберите оценку
            <input type="radio" value="1" name="score">1</input>
            <input type="radio" value="2" name="score">2</input>
            <input type="radio" value="3" name="score">3</input>
            <input type="radio" value="4" name="score">4</input>
            <input type="radio" value="5" name="score">5</input>
            </div>
            <textarea name="feedback_form" class="message" cols="4" rows="50" placeholder="Оставьте отзыв"></textarea>
            <input class="textbox" type="email" placeholder="Введите ваш e-mail">
            <input class="button" type="submit" placeholder="Отправить">
            </form>
        </div>
    </div>
</body>

</html>