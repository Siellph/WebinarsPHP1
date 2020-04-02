<?php
$firstnum = (int)$_GET[firstnum];
$secondnum = (int)$_GET[secondnum];
if ($_GET['plus']) {
    $res = $firstnum + $secondnum;
    echo "$firstnum + $secondnum = ".$res;
} elseif ($_GET['minus']) {
    $res = $firstnum - $secondnum;
    echo "$firstnum - $secondnum = ".$res;
} elseif ($_GET['multi']) {
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