<?php
$h = date('H');
$m = date('i');
function hours($h) {
    if ($h==0 || $h==5 || $h==6 || $h==7 || $h==8 || $h==9 || 
    $h==10 || $h==11 || $h==12 || $h==13 || $h==14 || $h==15 || 
    $h==16 || $h==17 || $h==18 || $h==19 || $h==20) {
        return "$h часов";
    } elseif ($h==1 || $h==21) {
        return "$h час";
    } elseif ($h==2 || $h==3 || $h==4 || $h==22 || $h==23) {
        return "$h часа";
    }
}
function minutes($m) {
    if ($m==0 || $m==5 || $m==6 || $m==7 || $m==8 || $m==9 || 
    $m==10 || $m==11 || $m==12 || $m==13 || $m==14 || $m==15 || 
    $m==16 || $m==17 || $m==18 || $m==19 || $m==20 || $m==25 || 
    $m==26 || $m==27 || $m==28 || $m==29 || $m==30 || $m==35 || 
    $m==36 || $m==37 || $m==38 || $m==39 || $m==40 || $m==45 || 
    $m==46 || $m==47 || $m==48 || $m==49 || $m==50 || $m==55 || 
    $m==56 || $m==57 || $m==58 || $m==59) {
        return "$m минут";
    } elseif ($m==1 || $m==21 || $m==31 || $m==41 || $m==51) {
        return "$m минута";
    } elseif ($m==2 || $m==3 || $m==4 || $m==22 || $m==23 || 
    $m==24 || $m==32 || $m==33  || $m==34 || $m==42 || $m==43 || 
    $m==44 || $m==52 || $m==53 || $m==54) {
        return "$m минуты";
    }
}
echo hours($h) . minutes($m);
?>