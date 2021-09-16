<html>

<head>
    <?php include "meta.php"; ?>
    <title>Checkout</title>
</head>

<body>
    <?php include "head.php"; ?>

    <div class="jumbotron bg-transparent mybg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto my-auto">
                    <h3 class="display-4    ">Checkout</h3>
                    <p>Kamu bisa cek cara melakukan pembayaran <a href="tutorial.php">Disini</a> </p>
                </div>
                <div class="col-lg-7"><img src="assets/img/2903.png" alt="Chekcout" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="card border-0">
            <div class="card-body ">
                <h4 class="card-title mt-1">Checkout & pembayaran</h4>
                <form action="/kenken/jadwal-saya.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Dengan Dokter : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" value="dr. Yahya Lengkong SpKJ." disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="ddate">Pada Tanggal : </label>
                        <div class="col-sm-10">
                            <input type="date" name="" value="2021-09-27" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ttime" class="col-sm-2 col-form-label">Pada Jam : </label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prc" class="col-sm-2 col-form-label">Biaya Konsultasi : </label>
                        <div class="col-sm-10">
                            <input type="text" value="Rp. 350.000,-" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cont" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                        <div class="col-sm-10">
                            <div class="accordion" id="accordionExample" id="cont">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Pembayaran via <em>E-Bankin</em>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body mb-0">
                                            <input type="text" name="p" id="p" value="058889995656565" class="form-control" disabled>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" name="" id="np" placeholder="Masukan Unique Number Pembayaran" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Pembayaran Secara Lansung Ditempat
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <input type="text" name="e" id="e" value="88995238536" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" disabled>
                                                Pembayaran Via <em>E-walle</em>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Lakukan Pembayaran</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

</body>

</html>