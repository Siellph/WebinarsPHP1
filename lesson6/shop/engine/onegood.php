<?php
include "database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM goods WHERE id = $id";
$result = mysqli_query($connection, $sql);

$full_good = mysqli_fetch_assoc($result);
// print_r($full_good);

$good_title = $full_good['name'];
$path_photo = $full_good['path_photo'];
$good_fulldesc = $full_good['full_desc'];
$good_price = $full_good['price'];
$name_photo = $full_good['name_photo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style_for_onegood.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <title><?=$good_title?></title>
</head>
<body>
<header>
        <div class="logo">
            <a href="../index.php">
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
</body>
</html>
<?php
echo '<div class="all_goods">';
echo '<div class="good">';
echo '<div class="left_block">';
echo '<img class="good_img" src="../'.$path_photo.'big/'.$name_photo.'">';
echo '</div>';
echo '<div class="right_block">';
echo '<p class="title">'.$good_title.'</p>';
echo '<span class="desc">'.$good_fulldesc.'</span>';
echo '<input type="submit" class="buy" value="В корзину '.$good_price.'&#36;">';
echo '</div>';
echo '</div>';
echo '</div>';
// print_r($id);
?>