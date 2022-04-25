<?php
$randevu = array();

$randevu[0]="09:00";
$randevu[1]="09:10";
$randevu[2]="09:20";
$randevu[3]="09:30";
$randevu[4]="09:40";
$randevu[5]="09:50";





/*
$t = 0;
do{
    print "<h2>" . $randevu[$t] . "</h2>";
    $t++;
}while($t<=5)
*/

if(isset($_POST['randevu_saat'])) {


    if(empty($_SESSION["kullanici_mail"])){
        echo '<div class="alert alert-success">Randevu oluşturmak için giriş yapınız.</div>';
        header("refresh:1.5 url=index.php?sayfa=giris");
    }else {
        $randevu_ekle = $db->prepare("INSERT INTO randevu SET randevu_sehir=?,randevu_tarih=?, randevu_saat=?, randevu_hastane=?, randevu_doktor=?, randevu_klinik=?, randevu_hasta_id=?");
        $randevu_ekle->execute([$_POST['randevu_sehir'],$_POST['randevu_tarih'],$_POST['randevu_saat'],$_POST['randevu_hastane'],$_POST['randevu_doktor'],$_POST['randevu_klinik'],$kullanici_main_ID]);
        $message = "Randevu oluşturuldu.";
        echo "<script type='text/javascript' class='alert alert-success'>alert('$message');</script>";
        header("refresh:0 url=index.php?sayfa=randevularim");
    }
}









/*
    <form method="post" action="#">
                                                                    <input type="submit" name="saat" value="09:00">
                                                                    </form>
 */
?>



