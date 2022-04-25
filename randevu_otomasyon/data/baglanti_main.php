<?php

include 'admin/class/VT.php';
$VT2=new VT();


// Main kullanıcı bilgileri çekme
$kullanicilar_main=$VT2->VeriGetir("kullanicilar_main","WHERE kullanici_mail=?",array($_SESSION["kullanici_mail"]),"ORDER BY ID ASC",1);

if ($kullanicilar_main!=false)
{
    $kullanici_main_ID=$kullanicilar_main [0] ["ID"];
    $kullanici_main_ad=$kullanicilar_main [0] ["kullanici_ad"];
    $kullanici_main_soyad=$kullanicilar_main [0] ["kullanici_soyad"];
    $kullanici_main_tc=$kullanicilar_main [0] ["kullanici_tc"];
    $kullanici_main_mail=$kullanicilar_main [0] ["kullanici_mail"];
}


/*
// Main randevu bilgileri çekme
$randevu=$VT2->VeriGetir("randevu","WHERE randevu_hasta_id=?",array(2),"ORDER BY ID ASC",1);

if ($randevu!=false)
{
    $randevu_sehir = $randevu [0] ["randevu_sehir"];
    $randevu_tarih = $randevu [0] ["randevu_tarih"];
    $randevu_saat = $randevu [0] ["randevu_saat"];
    $randevu_hastane = $randevu [0] ["randevu_hastane"];
    $randevu_doktor = $randevu [0] ["randevu_doktor"];
    $randevu_klinik = $randevu [0] ["randevu_klinik"];
}
*/
