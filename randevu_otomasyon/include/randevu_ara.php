<?php
include 'data/randevu.php';
include 'data/tarih.php';
?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Randevu Ara</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Randevu Ara</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">


        <div class="container">
            <?php
            include 'data/tarih.php';

            ?>


            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg bg-white">
                <div class="container">



                    <div class="randevu-list">

                        <ul>
                            <li data-aos="fade-up" >
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">

                                    <div class="row">
                                        <div class="randevu col-md-2">
                                            <div class="randevu_ara d-flex align-items-start">
                                                <div class="randevu_ara_ort" ><img src="assets/img/hastaneler/medicana.png" class="img-fluid" width="150px;"></div>
                                            </div>
                                        </div>

                                        <div class="randevu col-md-2">
                                            <div class="randevu_ara d-flex align-items-start">
                                                <div class="randevu_ara_ort"><span class="ant-typography"><strong>En Erken Tarih<br><span class="tarih" style="background-color: rgb(45, 183, 245);"><?=$tarih[1]?></span></strong></span></div>
                                            </div>
                                        </div>

                                        <div class="randevu col-md-3">
                                            <div class="randevu_ara d-flex align-items-start">
                                                <div class="randevu_ara_alt" ><i style="padding-right: 15px;" class="bx bx-building"></i>  Beyin ve Sinir Cerrahisi</div>
                                            </div>
                                        </div>

                                        <div class="randevu col-md-3">
                                            <div class="randevu_ara d-flex align-items-start">
                                                <div class="randevu_ara_alt" ><i style="padding-right: 15px;" class="fas fa-user-md"></i>  Harun Irız</div>
                                            </div>
                                        </div>
                                        <div class="randevu col-md-2">
                                            <div class="randevu_ara d-flex align-items-start">
                                                <div class="randevu_ara_ort">
                                                    <button class="tarih_sec_btn btn btn-primary btn-sm icon-show">Tarih seç</button>
                                                    <button class="tarih_sec_btn btn btn-dark btn-sm icon-close">Tarih seç</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                                    <hr>




                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul class="nav nav-tabs flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-bs-toggle="tab"  href="#tab-1" ><?=$tarih[1],"- " .$gun[1]?></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><?=$tarih[2],"- " .$gun[2]?></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><?=$tarih[3],"- " .$gun[3]?></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><?=$tarih[4],"- " .$gun[4]?></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5"><?=$tarih[5],"- " .$gun[5]?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9 mt-4 mt-lg-0">
                                            <div class="tab-content">

                                                <div class="tab-pane active show" id="tab-1">
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="randevu_tarih" value="<?=$tarih[1]?>">
                                                        <input type="hidden" name="randevu_hastane" value="Medicana">
                                                        <input type="hidden" name="randevu_sehir" value="Bursa">
                                                        <input type="hidden" name="randevu_klinik" value="Beyin ve Sinir Cerrahisi">
                                                        <input type="hidden" name="randevu_doktor" value="Harun IRIZ">

                                                        <?php
                                                            include 'data/saatler.php';
                                                        ?>

                                                    </form>
                                                </div>


                                                <div class="tab-pane" id="tab-2">
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="randevu_tarih" value="<?=$tarih[2]?>">
                                                        <input type="hidden" name="randevu_hastane" value="Medicana">
                                                        <input type="hidden" name="randevu_sehir" value="Bursa">
                                                        <input type="hidden" name="randevu_klinik" value="Beyin ve Sinir Cerrahisi">
                                                        <input type="hidden" name="randevu_doktor" value="Harun IRIZ">
                                                        <?php
                                                        include 'data/saatler.php';
                                                        ?>
                                                    </form>
                                                </div>

                                                <div class="tab-pane" id="tab-3">
                                                    <form action="#" method="post">
                                                    <input type="hidden" name="randevu_tarih" value="<?=$tarih[3]?>">
                                                    <input type="hidden" name="randevu_hastane" value="Medicana">
                                                    <input type="hidden" name="randevu_sehir" value="Bursa">
                                                    <input type="hidden" name="randevu_klinik" value="Beyin ve Sinir Cerrahisi">
                                                    <input type="hidden" name="randevu_doktor" value="Harun IRIZ">
                                                    <?php
                                                    include 'data/saatler.php';
                                                    ?>
                                                    </form>
                                                </div>

                                                <div class="tab-pane" id="tab-4">
                                                    <form action="#" method="post">
                                                    <input type="hidden" name="randevu_tarih" value="<?=$tarih[4]?>">
                                                    <input type="hidden" name="randevu_hastane" value="Medicana">
                                                    <input type="hidden" name="randevu_sehir" value="Bursa">
                                                    <input type="hidden" name="randevu_klinik" value="Beyin ve Sinir Cerrahisi">
                                                    <input type="hidden" name="randevu_doktor" value="Harun IRIZ">
                                                    <?php
                                                    include 'data/saatler.php';
                                                    ?>
                                                    </form>
                                                </div>

                                                <div class="tab-pane" id="tab-5">
                                                    <form action="#" method="post">
                                                    <input type="hidden" name="randevu_tarih" value="<?=$tarih[5]?>">
                                                    <input type="hidden" name="randevu_hastane" value="Medicana">
                                                    <input type="hidden" name="randevu_sehir" value="Bursa">
                                                    <input type="hidden" name="randevu_klinik" value="Beyin ve Sinir Cerrahisi">
                                                    <input type="hidden" name="randevu_doktor" value="Harun IRIZ">
                                                    <?php
                                                    include 'data/saatler.php';
                                                    ?>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </li>






                        </ul>

                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

        </div>






    </section>

</main><!-- End #main -->

