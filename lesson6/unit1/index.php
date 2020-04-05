<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="number" name="firstnum" placeholder="Введите первое число" value="<?=$_GET[firstnum]?>">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="secondnum" placeholder="Введите второе число" value="<?=$_GET[secondnum]?>">
        <input type="submit" value="Посчитать">
    </form>

</body>

</html>

<?php
$firstnum = (int)$_GET[firstnum];
$secondnum = (int)$_GET[secondnum];
if ($_GET['operation']=='+') {
    $res = $firstnum + $secondnum;
    echo "$firstnum + $secondnum = ".$res;
} elseif ($_GET['operation']=="-") {
    $res = $firstnum - $secondnum;
    echo "$firstnum - $secondnum = ".$res;
} elseif ($_GET['operation']=="*") {
    $res = $firstnum * $secondnum;
    echo "$firstnum * $secondnum = ".$res;
} else {
        if ($secondnum !== 0) {
            $res = $firstnum / $secondnum;
            echo "$firstnum / $secondnum = ".$res;
        } else {
            echo "На 0 делить нельзя!";
        }
    }
?>