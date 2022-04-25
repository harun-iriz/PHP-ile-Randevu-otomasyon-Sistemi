<?php
@session_start();
@ob_start();
define("DATA","data/");
define("SAYFA","include/");
define("SINIF","class/");
define("SITE",$siteURL);
//include_once(DATA."baglan.php");
include 'admin/class/vt2.php';
include 'data/baglanti_main.php';



?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Randevum.net</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=SITE?>assets/img/favicon.png" rel="icon">
  <link href="<?=SITE?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=SITE?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  


  

  <!-- Template Main CSS File -->
  <link href="<?=SITE?>assets/css/style.css" rel="stylesheet">

</head>

<body>


<?php


if(empty($_SESSION["kullanici_mail"])){
    include_once(DATA."header.php");
}else{
    include_once(DATA."header2.php");
}



if($_GET && !empty($_GET["sayfa"]))
{
    $sayfa=$_GET["sayfa"].".php";
    if(file_exists(SAYFA.$sayfa))
    {
        include_once(SAYFA.$sayfa);
    }
    else
    {
        include_once(SAYFA."home.php");

    }
}
else
{
    include_once(SAYFA."home.php");

}

include_once(DATA."footer.php");
?>






  <!-- Vendor JS Files -->
  <script src="<?=SITE?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?=SITE?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=SITE?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=SITE?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=SITE?>assets/vendor/php-email-form/validate.js"></script>


   
   

   
   
   
   
   
   
    

  <!-- Template Main JS File -->
  <script src="<?=SITE?>assets/js/main.js"></script>

</body>

</html>