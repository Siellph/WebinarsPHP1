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
    return $arg1 / $arg2;
}
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
    case 'Сумма';
        echo sum($arg1,$arg2);
    break;
    case 'Разность':
        echo diff($arg1,$arg2);
    break;
    case 'Умножение':
        echo multi($arg1, $arg2);
    break;
    case 'Деление':
        echo div($arg1, $arg2);
    break;
    }
}
echo mathOperation(2,5,'Умножение');
?>