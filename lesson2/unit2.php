<?php
$a=rand(0,15);
function f($a) {
    echo "$a <br>";
    if ($a == 15) {
        return;
    } else {
        f($a+1);
    }
}
echo f($a);
?>