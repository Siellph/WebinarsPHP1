<?php
$a = 5;
$b = '05';
var_dump($a == $b); //true, потому что идет сравнение только по значению
var_dump((int)'012345'); //int приводит к целочисленному значению, которое не может начинатся с 0 и он отсекается
var_dump((float)123.0 === (int)123.0); //совпадает по значению, но не совпадает по типу данных, поэтому ЛОЖЬ
var_dump((int)0 === (int)'hello, world'); //при переводе строки в целочисленное значение, в данном варианте, получим 0. И так как идет сравнение, как по значению, так и по типу, то получаем true
?>