<?php
include "database.php";

$sql = "SELECT * FROM goods WHERE id > 0";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while($good = mysqli_fetch_assoc($result)) {
        $good_title = $good['name'];
        $path_photo = $good['path_photo'];
        $good_descript = $good['descript'];
        $good_price = $good['price'];
        $name_photo = $good['name_photo'];
        $id = $good['id'];
        echo '<div class="good">';
        echo '<div class="left_block">';
        echo '<a id="'.$id.'" href="engine/onegood.php?id='.$id.'" class="more_title" target="_blank"><p class="title">'.$good_title.'</p></a>';
        echo '<a id="'.$id.'" href="engine/onegood.php?id='.$id.'" class="more_img" target="_blank"><img class="good_img" src="'.$path_photo.$name_photo.'"></a>';
        echo '</div>';
        echo '<div class="right_block">';
        echo '<span class="desc">'.$good_descript.'</span>';
        echo '<input type="submit" class="buy" value="В корзину '.$good_price.'&#36;">';
        echo '</div>';
        echo '</div>';
        // print_r($good);
    }
} else {
    echo "В базе нет товаров";
}
mysqli_close($connection);
?>