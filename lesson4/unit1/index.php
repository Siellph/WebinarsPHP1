<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="img_block">
    <?php
        $img = scandir("pictures/small");
        for ($i=3; $i<count($img); $i++):?>
            <a href="pictures/big/<?=$img[$i]?>" target="_blank"><img src="pictures/small/<?=$img[$i]?>" alt="панда"></a>
    <?php
    endfor;
    ?>
</div>
</body>
</html>