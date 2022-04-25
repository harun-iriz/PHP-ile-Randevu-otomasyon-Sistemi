<?php
include "class/vt2.php";
?>
<main id="main">


    <section class="inner-page">



        <div class="container">
            <h3 style="margin-bottom: 20px; margin-top: 50px;">Hasta Bilgileri</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">İsim</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">Tc</th>
                    <th scope="col">Mail Adresi</th>




                </tr>
                </thead>
                <tbody>

                <?php

                $kullanici_cek=$db->prepare("SELECT * FROM kullanicilar_main");
                $kullanici_cek->execute();
                $kullanici_bilgi=$kullanici_cek->fetchAll(PDO::FETCH_OBJ);

                foreach ($kullanici_bilgi as $kullanici_cek){?>

                    <tr>
                        <td><?= $kullanici_cek->kullanici_ad ?></td>
                        <td><?= $kullanici_cek->kullanici_soyad ?></td>
                        <td><?= $kullanici_cek->kullanici_tc?></td>
                        <td><?= $kullanici_cek->kullanici_mail ?></td>

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

