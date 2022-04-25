<?php
if(isset($_POST['kullanici_giris']))
{
    if(!empty($_POST["kullanici_mail"]) && (!empty($_POST["kullanici_password"])))
    {
        $kullanici_mail=($_POST["kullanici_mail"]);
        $kullanici_password=md5(($_POST["kullanici_password"]));
        $kontrol=$db->prepare("SELECT * FROM kullanicilar_main WHERE kullanici_mail=:kullanici_mail AND kullanici_password=:kullanici_password");
        $kontrol->execute(array('kullanici_mail'=>$kullanici_mail, 'kullanici_password'=>$kullanici_password));




        if($kontrol->rowCount()==1)
        {
            $_SESSION["kullanici_mail"]=$kullanici_mail;


            echo '<div class="alert alert-success">Giriş başarılı.</div>';
            header("refresh:0.5 url=index.php");

            // header("Location:index.php");


            exit;
        }
        else
        {
            echo '<div class="alert alert-danger">Kullanıcı adı veya şifre hatalı!</div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger">Kullanıcı adı ve şifre boş bırakılamaz!</div>';
    }
}

?>