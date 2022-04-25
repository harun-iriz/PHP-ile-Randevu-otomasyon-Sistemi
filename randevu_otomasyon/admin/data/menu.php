<?php
@session_start();
@ob_start();


/*
include_once (SINIF."vt2.php");
include_once (DATA."giris.php");



$q=$db->query("SELECT * FROM kullanicilar WHERE ID=3;");
$q->execute();
while($row=$q->fetch(PDO::FETCH_ASSOC)){
    $adsoyad=$row['adsoyad'];
    $mail=$row['mail'];
*/
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=SITE?>index.php" class="brand-link">
        <img src="<?=SITE?>dist/img/AdminLTELogo.png" alt="Admin Randevu" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Randevu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=SITE?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$kullanici_adsoyad ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="<?=SITE?>index.php" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?=SITE?>index.php?sayfa=randevu" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Randevular
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?=SITE?>index.php?sayfa=hasta" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Hasta Bilgileri
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?=SITE?>index.php?sayfa=cikis" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Çıkış Yap
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

