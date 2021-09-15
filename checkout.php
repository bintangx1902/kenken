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
                </div>
                <div class="col-lg-7"><img src="assets/img/2903.png" alt="Chekcout" class="img-fluid"></div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="card border-0">
            <div class="card-body ">
                <h4 class="card-title mt-1">Checkout & pembayaran</h4>
                <form action="">
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
                        <div class="col-sm-2">
                            <input type="time" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prc" class="col-sm-2 col-form-label">Biaya Konsultasi : </label>
                        <div class="col-sm-10">
                            <input type="text" value="Rp. 350.000,-" class="form-control" disabled>
                        </div>
                    </div>

                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Metode Pembayaran</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Pembayaran Online Via bank
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Bayar di Tempat
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Pembayaran dengan <em>E-Wallet</em>
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="v-acc" class="col-sm-2 col-form-label">Nomor Pembayaran </label>
                        <div class="col-sm-10">
                            <input type="text" value="23344455555" class="form-control" disabled>
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