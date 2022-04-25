<?php
 $array = array();
$randevu_cek=$db->prepare("SELECT * FROM randevu ");
$randevu_cek->execute();


while ($cikti = $randevu_cek->fetch(PDO::FETCH_ASSOC)){
    $degisken=$cikti["randevu_saat"];
    $degisken2=$cikti["randevu_hastane"];
    $degisken3=$cikti["randevu_klinik"];




?>


    <?php
}
?>




<form action="#" method="post">
    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:00"
                        <?php if($degisken=='09:00' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:00</button>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:10"
                        <?php if ($degisken=='09:10' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:20"
                        <?php if ($degisken=='09:20' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:30"
                        <?php if ($degisken=='09:30' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:40"
                        <?php if ($degisken=='09:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="09:50"
                        <?php if ($degisken=='09:50' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >09:50</button>
                </div>

            </div>
        </div>
    </div>


    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:00"
                        <?php if ($degisken ==  '10:00' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:00</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:10"
                        <?php if ($degisken ==  '10:10' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:20"
                        <?php if ($degisken ==  '10:20' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:30"
                        <?php if ($degisken ==  '10:30' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:40"
                        <?php if ($degisken ==  '10:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="10:50"
                        <?php if ($degisken ==  '10:50' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >10:50</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:00" disabled
                    >11:00</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:10"
                        <?php if ($degisken ==  '11:10' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >11:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:20" disabled
                    >11:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:30"
                        <?php if ($degisken ==  '11:30' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >11:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:40"
                        <?php if ($degisken ==  '11:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >11:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="11:50" disabled

                    >11:50</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:00"
                        <?php if ($degisken ==  '13:00' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >13:00</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:10"disabled
                    >13:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:20"
                        <?php if ($degisken ==  '13:20' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >13:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:30"
                        <?php if ($degisken ==  '13:30' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >13:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:40"
                        <?php if ($degisken ==  '13:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >13:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="13:50"
                        <?php if ($degisken ==  '13:50' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >13:50</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:00"
                        <?php if ($degisken ==  '14:00' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:00</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:10"
                        <?php if ($degisken ==  '14:10' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:20"
                        <?php if ($degisken ==  '14:20' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:30"
                        <?php if ($degisken ==  '14:30' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:40"
                        <?php if ($degisken ==  '14:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="14:50"
                        <?php if ($degisken ==  '14:50' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >14:50</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="container px-1">
            <div class="row gx-2">

                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:00" disabled
                    >15:00</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:10"
                        <?php if ($degisken ==  '15:10' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >15:10</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:20"
                        <?php if ($degisken ==  '15:20' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >15:20</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:30" disabled
                    >15:30</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:40"
                        <?php if ($degisken ==  '15:40' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >15:40</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary" name="randevu_saat" value="15:50"
                        <?php if ($degisken ==  '15:50' && $degisken2 == 'Medicana' && $degisken3 == 'Beyin ve Sinir Cerrahisi'){?> disabled <?php   } ?>
                    >15:50</button>
                </div>

            </div>
        </div>
    </div>


</form>


