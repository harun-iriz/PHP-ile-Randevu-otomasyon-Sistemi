<?php

session_start();
if(isset($_POST['kullanici_giris']))
{
    if(!empty($_POST["kullanici"]) && (!empty($_POST["sifre"]))) {

        $kullanici=($_POST["kullanici"]);
        $sifre=md5(($_POST["sifre"]));
        $kontrol=$db->prepare("SELECT * FROM kullanicilar WHERE kullanici=:kullanici AND sifre=:sifre");
        $kontrol->execute(array('kullanici'=>$kullanici, 'sifre'=>$sifre));

        if($kontrol->rowCount()==1)
        {
            $_SESSION["kullanici"]=$kullanici;

            header("Location:index.php");

            exit;
        }
        else
        {
            echo '<div class="alert alert-danger">Kullanıcı adı veya şifre hatalı!</div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger">Kullanıcı adı ve şifre boş bıraklıamaz!</div>';
    }


}

?>
