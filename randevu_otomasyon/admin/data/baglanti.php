<?php
include_once (SINIF."VT.php");
$VT=new VT();


// Admin paneli ayarlar bilgilerini çekme:
$ayarlar=$VT->VeriGetir("ayarlar","WHERE ID=?",array(1),"ORDER BY ID ASC",1);

if($ayarlar!=false)
{
    $sitebaslik=$ayarlar [0] ["baslik"];
    $siteanahtar=$ayarlar [0] ["anahtar"];
    $siteaciklama=$ayarlar [0] ["aciklama"];
    $siteURL=$ayarlar [0] ["url"];
}

// Admin paneli kullanıcı bilgileri çekme:
$kullanicilar=$VT->VeriGetir("kullanicilar","WHERE kullanici=?",array($_SESSION["kullanici"]),"ORDER BY ID ASC",1);

if ($kullanicilar!=false)
{
    $kullanici_adsoyad=$kullanicilar [0] ["adsoyad"];
    $kullanici_kullanici=$kullanicilar [0] ["kullanici"];
    $kullanici_mail=$kullanicilar [0] ["mail"];
}
/*
// Main kullanıcı bilgileri çekme
$kullanicilar_main=$VT->VeriGetir("kullanicilar_main","WHERE kullanici_mail=?",array($_SESSION["kullanici_mail"]),"ORDER BY ID ASC",1);

if ($kullanicilar_main!=false)
{
    $kullanici_main_ad=$kullanicilar_main [0] ["kullanici_ad"];
    $kullanici_main_soyad=$kullanicilar_main [0] ["kullanici_soyad"];
    $kullanici_tc=$kullanicilar_main [0] ["kullanici_tc"];
    $kullanici_main_mail=$kullanicilar_main [0] ["kullanici_mail"];
}
*/

?>