<?php
include "baglanti_main.php";
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Randevularım</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Randevularım</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">



        <div class="container">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Şehir</th>
                    <th scope="col">Hastane</th>
                    <th scope="col">Klinik</th>
                    <th scope="col">Doktor</th>
                    <th scope="col">Tarih</th>
                    <th scope="col">Saat</th>


                </tr>
                </thead>
                <tbody>

                    <?php

                    $randevu_cek=$db->prepare("SELECT * FROM randevu WHERE randevu_hasta_id=?");
                    $randevu_cek->execute([$kullanici_main_ID]);
                    $randevu_bilgi=$randevu_cek->fetchAll(PDO::FETCH_OBJ);

                    foreach ($randevu_bilgi as $randevu_cekk){?>

                        <tr>
                            <td><?= $randevu_cekk->randevu_sehir ?></td>
                            <td><?= $randevu_cekk->randevu_hastane ?></td>
                            <td><?= $randevu_cekk->randevu_klinik ?></td>
                            <td><?= $randevu_cekk->randevu_doktor ?></td>
                            <td><?= $randevu_cekk->randevu_tarih ?></td>
                            <td><?= $randevu_cekk->randevu_saat ?></td>
                            <?php
                            /*
                            <td>
                                <a href="randevu_sil.php?pid=<?= $randevu_cekk->randevu_id ?>" class="btn btn-danger">Sil</a>
                            </td>
                            */
                            ?>
                        </tr>

                    <?php
                    }
                    ?>







                </tbody>
            </table>


        </div>



    </section>

</main><!-- End #main -->

