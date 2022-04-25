<?php

if(isset($_GET['pid'])) {

    include "admin/class/vt2.php";


    $sorgu = $db->prepare("DELETE FROM randevu WHERE randevu_id = ?");
    $sonuc=$sorgu->execute([$_GET['pid']]);
    if ($sonuc){
        header("Location:index.php");
    }else{
        echo 'kayıt silinemedi';
    }


}