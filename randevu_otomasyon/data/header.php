<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="bi bi-phone"></i> +1 5589 55488 55
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?=SITE?>index.php">Randevum.net</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="<?=SITE?>index.php">Ana Sayfa</a></li>
                <li><a class="nav-link scrollto " href="<?=SITE?>index.php?sayfa=yardim"><i class=" bx bx-help-circle" style="font-size: 15px; margin-right: 5px"></i>Yardım</a></li>
                <li><a class="nav-link scrollto" href="<?=SITE?>index.php?sayfa=giris">Randevularım</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="<?=SITE?>index.php?sayfa=giris" class="appointment-btn scrollto"><span class="d-none d-md-inline">Giriş</span>/ Kayıt Ol</a>

    </div>
</header><!-- End Header -->