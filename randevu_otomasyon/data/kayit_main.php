<?php
if(isset($_POST['kayitol']))
{
    if(
        !empty($_POST["kullanici_ad"]) &&
        (!empty($_POST["kullanici_soyad"]) &&
            (!empty($_POST["kullanici_tc"])) &&
            (!empty($_POST["kullanici_mail"])) &&
            (!empty($_POST["kullanici_password"]))

        ))
    {
        $kullanici_ad=($_POST["kullanici_ad"]);
        $kullanici_soyad=($_POST["kullanici_soyad"]);
        $kullanici_tc=($_POST["kullanici_tc"]);
        $kullanici_mail=($_POST["kullanici_mail"]);
        $kullanici_password=(md5($_POST["kullanici_password"]));


        $gelenEmailSorgusu=$db->prepare("SELECT * FROM kullanicilar_main WHERE kullanici_mail = ? LIMIT 1");
        $gelenEmailSorgusu->execute([$kullanici_mail]);
        $gelenEmailSorgusuSayisi=$gelenEmailSorgusu->rowCount();

        if($gelenEmailSorgusuSayisi > 0){
            echo '<div class="alert alert-danger">Email adresi zaten kayıtlı!</div>';
        }else{
            $ekle=$db->prepare("INSERT INTO kullanicilar_main SET kullanici_ad=?,kullanici_soyad=?,kullanici_tc=?,kullanici_mail=?,kullanici_password=?");
            $ekle->execute([$kullanici_ad,$kullanici_soyad,$kullanici_tc,$kullanici_mail,$kullanici_password]);

            if($ekle->rowCount()==1)
            {
                $_SESSION["kullanici_mail"]=$kullanici_mail;

                echo '<div class="alert alert-success">Kayıt başarılı.</div>';
                header("refresh:1.5 url=index.php");

                exit;
            }
            else
            {
                echo '<div class="alert alert-danger">Kayıt işlemi sırasında hata oluştu!</div>';
            }
        }


    }
    else
    {
        echo'<div class="alert alert-danger">Boş alanları doldurunuz!</div>';
    }
}

?>