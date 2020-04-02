<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="img_block">
    <?php
    include "engine/sqlconnect.php";
    $sql = "SELECT * FROM gallery WHERE id > 0";
    $res = mysqli_query($connection,$sql);

    while($data = mysqli_fetch_assoc($res)){
        echo "<a href=".$data["path-big"]." target='_blank'><img src=".$data["path-small"]."></a>";
    }
    ?>
    
</div>
</body>
</html>