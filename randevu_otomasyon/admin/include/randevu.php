<?php
include "class/vt2.php";
?>
<main id="main">


    <section class="inner-page">



        <div class="container">
            <h3 style="margin-bottom: 20px; margin-top: 50px;">Randevular</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">İsim</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">Tc</th>
                    <th scope="col">Klinik</th>
                    <th scope="col">Doktor</th>
                    <th scope="col">Tarih</th>
                    <th scope="col">Saat</th>
                    <th scope="col">Sil</th>



                </tr>
                </thead>
                <tbody>

                <?php

                $randevu_cek=$db->prepare("SELECT * FROM randevu");
                $randevu_cek->execute();
                $randevu_bilgi=$randevu_cek->fetchAll(PDO::FETCH_OBJ);




                foreach ($randevu_bilgi as $randevu_cek){?>
<?php
                    $kullanici_cek=$db->prepare("SELECT * FROM kullanicilar_main WHERE ID=?");
                    $kullanici_cek->execute([$randevu_cek->randevu_hasta_id]);
                    $kullanici_bilgi=$kullanici_cek->fetchAll(PDO::FETCH_OBJ);

                    foreach ($kullanici_bilgi as $kullanici_cek) {
                    $kullanici_ad=$kullanici_cek->kullanici_ad;
                    $kullanici_soyad=$kullanici_cek->kullanici_soyad;
                    $kullanici_tc=$kullanici_cek->kullanici_tc;
                    }


                    ?>
                    <tr>
                        <td><?= $kullanici_ad ?></td>
                        <td><?= $kullanici_soyad ?></td>
                        <td><?= $kullanici_tc ?></td>
                        <td><?= $randevu_cek->randevu_klinik ?></td>
                        <td><?= $randevu_cek->randevu_doktor ?></td>
                        <td><?= $randevu_cek->randevu_tarih ?></td>
                        <td><?= $randevu_cek->randevu_saat ?></td>
                        <td><a href="data/sil.php?randevu_id=<?php echo $randevu_cek->randevu_id;?>" > <button class="btn btn-danger"> Sil </button> </a></td>
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

