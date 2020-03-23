<?php
function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}
function diff($arg1, $arg2) {
    return $arg1 - $arg2;
}
function multi($arg1, $arg2) {
    return $arg1 * $arg2;
}
function div($arg1, $arg2) {
    if ($arg2 !== 0) {
    return $arg1 / $arg2;
    } else {
        echo "На 0 делить нельзя!";
    }
}
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
    case Сумма;
        echo sum($arg1,$arg2);
    break;
    case Разность:
        echo diff($arg1,$arg2);
    break;
    case Умножение:
        echo multi($arg1, $arg2);
    break;
    case Деление:
        echo div($arg1, $arg2);
    break;
    }
}
$arg1 = rand(-10,10);
$arg2 = rand(-10,10);
echo "Число 1 равно $arg1, число 2 равно $arg2 <hr>";
echo mathOperation($arg1,$arg2,Деление);
?>