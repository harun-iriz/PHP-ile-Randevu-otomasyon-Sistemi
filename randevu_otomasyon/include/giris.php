<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Giriş / Kayıt Ol</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Giriş / Kayıt Ol</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">






        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <h3>Giriş Yap</h3>
                    <hr>
                    <?php

                    //include_once (DATA."giris_main.php");
                    include 'data/giris_main.php';

                    ?>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" >Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kullanici_mail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" >Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="kullanici_password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="kullanici_giris">Giriş Yap</button>
                    </form>
                </div>



                <div class="col-md-2"></div>

                <div class="col-md-5">
                    <h3>Kayıt Ol</h3>
                    <hr>
                    <?php

                    //include_once (DATA."kayit_main.php");
                    include 'data/kayit_main.php';

                    ?>

                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ad</label>
                            <input type="name" class="form-control" id="name" name="kullanici_ad">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Soyad</label>
                            <input type="lastname" class="form-control" id="lastName" name="kullanici_soyad">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kimlik No</label>
                            <input type="tc" class="form-control" id="tc" name="kullanici_tc">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kullanici_mail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="kullanici_password">
                        </div>

                        <button type="submit" class="btn btn-primary" name="kayitol">Kayıt Ol</button>
                    </form>

                </div>


            </div>
        </div>



    </section>

</main><!-- End #main -->