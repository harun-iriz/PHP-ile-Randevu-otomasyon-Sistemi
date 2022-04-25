<?php
ob_start();
session_start();
include_once("baglan.php");


if(isset($_POST['kayitol'])) {
    $kullanici_ad = isset($_POST['kullanici_ad']) ? $_POST['kullanici_ad'] : null;
    $kullanici_soyad = isset($_POST['kullanici_soyad']) ? $_POST['kullanici_soyad'] : null;
    $kullanici_mail = isset($_POST['kullanici_mail']) ? $_POST['kullanici_mail'] : null;
    $kullanici_tc = isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
    $kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;

    //veritabanı ekleme işlemi
    $sorgu = $db->prepare('INSERT INTO kullanici SET
    kullanici_ad = ?,
    kullanci_soyad = ?,
    kullanci_mail = ?,
    kullanci_tc = ?,
    kullanci_password = ?,
    ');
    $ekle = $sorgu->execute([
        $kullanici_ad, $kullanici_soyad, $kullanici_tc, $kullanici_mail, $kullanici_password
    ]);
    if ($ekle){
        header('location:index.php?durum=basarili');
    }else{
        $hata = $sorgu->errorInfo();
        echo 'mysql hatası' .$hata[2];
    }
}


?>