<?php
include "database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM goods WHERE id = $id";
$result = mysqli_query($connection, $sql);

$full_good = mysqli_fetch_assoc($result);
// print_r($full_good);

$good_title = $full_good['name'];
$path_photo = $full_good['path_photo'];
$desc = $descript['descript'];
$good_fulldesc = $full_good['full_desc'];
$good_price = $full_good['price'];
$name_photo = $full_good['name_photo'];

echo '<div class="all_goods">';
echo '<div class="good">';
echo '<div class="left_block">';
echo '<img class="good_img" src="'.$path_photo.'big/'.$name_photo.'">';
echo '</div>';
echo '<div class="right_block">';
echo '<p class="title">'.$good_title.'</p>';
echo '<span class="desc">'.$descript.'</span>';
echo '<span class="desc">'.$good_fulldesc.'</span>';
echo '<input type="submit" class="buy" value="В корзину '.$good_price.'&#36;">';
echo '</div>';
echo '</div>';
echo '</div>';
// print_r($id);
mysqli_close($connection);
?>