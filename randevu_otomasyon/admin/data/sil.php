<?php


include "../class/vt2.php";


if($_GET['randevu_id']){
    $sil=$db->prepare("DELETE from randevu where randevu_id=:randevu_id");
    $kontrol=$sil->execute(array('randevu_id'=>$_GET['randevu_id']));
    echo $kontrol;

    header('Location: http://a.haruniriz.com/');
}
