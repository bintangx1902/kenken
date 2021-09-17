<html>

<head>
    <?php include "meta.php"; ?>
    <title>Checkout</title>
</head>

<body>
    <?php include "head.php"; ?>

    <div class="jumbotron bg-transparent mybg">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-lg-4 mx-auto my-auto">
                    <h3 class="display-4    ">Checkout</h3>
                    <p>Kamu bisa cek cara melakukan pembayaran <a href="tutorial.php">Disini</a> </p>
                    <span><small class="text-muted">Pembayaran Hanya bisa melalui <em>E-Bankin</em></small></span>
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
                    <div class="form-group row mx-auto">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Dengan Dokter : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" value="dr. Yahya Lengkong SpKJ." disabled>
                        </div>
                    </div>

                    <div class="form-group row mx-auto">
                        <label class="col-sm-2 col-form-label" for="ddate">Pada Tanggal : </label>
                        <div class="col-sm-10">
                            <input type="date" name="" value="2021-09-27" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mx-auto">
                        <label for="ttime" class="col-sm-2 col-form-label">Pada Jam : </label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mx-auto">
                        <label for="prc" class="col-sm-2 col-form-label">Biaya Konsultasi : </label>
                        <div class="col-sm-10">
                            <input type="text" value="Rp. 350.000,-" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row mx-auto">
                        <label for="cont" class="col-sm-2 col-form-label">Nomor Virtual account</label>
                        <div class="col-sm-10">
                            <input type="text" name="" id="" value="88899655323238" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row mx-auto">
                        <label for="Np" class="col-sm-2 col-form-label">Nomor Pembayaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="" id="" class="form-control">
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