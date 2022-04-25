<?php
date_default_timezone_set('Europe/Istanbul'); //zaman dilimini istanbul olarak ayarla

$gunler = array(
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar',
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
);

$gun = array();
$tarih = array();

$tarih[1] = date('d-m-Y ', strtotime('+1 day'));
$gun[1] = $gunler[date('N')];
$tarih[2] = date('d-m-Y ', strtotime('+2 day'));
$gun[2] = $gunler[date('N') +1];
$tarih[3] = date('d-m-Y ', strtotime('+3 day'));
$gun[3] = $gunler[date('N') +2];
$tarih[4] = date('d-m-Y ', strtotime('+4 day'));
$gun[4] = $gunler[date('N') +3];
$tarih[5] = date('d-m-Y ', strtotime('+5 day'));
$gun[5] = $gunler[date('N') +4];


/*

// Örnek Sonuç: 3 Ağustos 2013 Cumartesi 02:19:18
for($t = 1 ; $t < 6 ; $t++) {
    if ($gun[$t] == $gunler[5]) {
        $tarih[$t] = date('d-m-Y ', strtotime('+4 day'));
        //$gun[$t] = $gunler[date('N') -3];
    }
    else if ($gun[$t] == $gunler[6]) {
        $tarih[$t] = date('d-m-Y ', strtotime('+5 day'));
        //$gun[$t] = $gunler[date('N') -4];
    }else{
        $tarih[$t] = date('d-m-Y ', strtotime('$t day'));
    }
}
*/

// GÜN
if ($gun[1] == $gunler[5]) {
    $tarih[1] = date('d-m-Y ', strtotime('+3 day'));
    $gun[1] = $gunler[date('N') +2];
}
else if ($gun[1] == $gunler[6]) {
    $tarih[1] = date('d-m-Y ', strtotime('+2 day'));
    $gun[1] = $gunler[date('N') +1];
}else{
    $tarih[1] = date('d-m-Y ', strtotime('+1 day'));
    $gun[1] = $gunler[date('N')];
}

// GÜN 2

if ($gun[2] == $gunler[5]) {
    $tarih[2] = date('d-m-Y ', strtotime('+4 day'));
    $gun[2] = $gunler[date('N') +2];
}
else if ($gun[2] == $gunler[6]) {
    $tarih[2] = date('d-m-Y ', strtotime('+5 day'));
    $gun[2] = $gunler[date('N') +3];
}else{
    $tarih[2] = date('d-m-Y ', strtotime('+2 day'));
    $gun[2] = $gunler[date('N') +1];
}

// GÜN 3

if ($gun[3] == $gunler[5]) {
    $tarih[3] = date('d-m-Y ', strtotime('+4 day'));
    $gun[3] = $gunler[date('N') +3];
}
else if ($gun[3] == $gunler[6]) {
    $tarih[3] = date('d-m-Y ', strtotime('+5 day'));
    $gun[3] = $gunler[date('N') +4];
}else{
    $tarih[3] = date('d-m-Y ', strtotime('+3 day'));
    $gun[3] = $gunler[date('N') +2];
}

// GÜN 4

if ($gun[4] == $gunler[5]) {
    $tarih[4] = date('d-m-Y ', strtotime('+4 day'));
    $gun[4] = $gunler[date('N') +3];
}
else if ($gun[4] == $gunler[6]) {
    $tarih[4] = date('d-m-Y ', strtotime('+5 day'));
    $gun[4] = $gunler[date('N') +4];
}else{
    $tarih[4] = date('d-m-Y ', strtotime('+4 day'));
    $gun[4] = $gunler[date('N') +3];
}

// GÜN 5

if ($gun[5] == $gunler[5]) {
    $tarih[5] = date('d-m-Y ', strtotime('+4 day'));
    $gun[5] = $gunler[date('N') +3];
}
else if ($gun[5] == $gunler[6]) {
    $tarih[5] = date('d-m-Y ', strtotime('+5 day'));
    $gun[5] = $gunler[date('N') +4];
}else{
    $tarih[5] = date('d-m-Y ', strtotime('+5 day'));
    $gun[5] = $gunler[date('N') +4];
}




/*
if ($gun[4] == $gunler[5]) {
    $tarih[4] = date('d-m-Y ', strtotime('+7 day'));
    $gun[4] = $gunler[date('N') + 6];
} else if ($gun[5] == $gunler[6]) {
    $tarih[4] = date('d-m-Y ', strtotime('+6 day'));
    $gun[5] = $gunler[date('N') + 5];
}
*/

/*
echo $gun[1];
echo $gun[2];
echo $gun[3];
echo $gun[4];
echo $gun[5];
*/


for($i = 1; $i < 6; $i++) {
    $gun[$i];
    //echo $tarih[$i];

    $tarih[$i];
}

