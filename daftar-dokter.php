<html>

<head>

    <title>List Dokter Psikiater</title>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="assets/css/dokter.css">
    <style>
        .pic {
            min-height: 4em;
        }

        @media (max-width: 767px) {
            .pic {
                min-height: 1.5em;
            }
        }
    </style>
</head>

<body>
    <?php include 'head.php' ?>

    <div class="jumbotron bg-transparent mybg mb-5">
        <div class="container d-flex flex-column align-items-center d-block">
            <img src="assets/img/4824.png " alt="psikiater" class="img-fluid mb-5 mw-80">
            <h1 class="display-4 bold">Daftar Dokter Psikiater</h1>
            <p>Berikut adalah daftar dokter terbaik untuk psikiater. <a href="#dokter">Lihat daftar.</a> </p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card" id="dokter">
            <div class="card-body">
                <div class="doctor mb-5">
                    <div class="container">
                        <div class="card-mb-5">
                            <div class="card-body">

                                <form action="" class="">

                                    <div class="input-group">
                                        <div class="w-100 row mx-auto">
                                            <input type="text" name="dname" id="dname" class="form-control col-md-10 col-sm-8">
                                            <button class="col btn btn-primary ml-auto">Cari Dokter</button>
                                        </div>
                                    </div>

                                    <div class="input-group d-block">
                                        <a type="button" data-toggle="collapse" data-target="#checkbox-container" aria-expanded="false" aria-controls="checkbox-container" class="mt-2 btn collapsed">Filter
                                            <svg style="height: 24px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div class="collapse" id="checkbox-container">

                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">

                                                                <div class="col-lg-4">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <label for="date">Jam Temu : </label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <input type="date" name="date" id="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <label for="date">Mulai dari jam : </label>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <input type="time" name="date" id="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <label for="date">Jam Terakhir : </label>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <input type="time" name="date" id="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    <h5 class="card-title">Provinsi</h5>
                                                    <hr>
                                                    <div class="p-2 row">
                                                        <?php for ($prov = 0; $prov <= 20; $prov++) { ?>
                                                            <div class="col-md-2 col-6">
                                                                <input type="checkbox" name="s" id="Check1" value="1">
                                                                <label for="Check1">Provinsi <?php echo $prov; ?></label>
                                                            </div>
                                                        <?php } ?>



                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Daerah</h5>
                                                    <hr>
                                                    <div class="p-2 row">
                                                        <?php for ($daerah = 0; $daerah <= 12; $daerah++) { ?>
                                                            <div class="col-md-2 col-6">
                                                                <input type="checkbox" name="s" id="Check1" value="1">
                                                                <label for="Check1">Daerah <?php echo $daerah; ?></label>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <?php for ($doc = 0; $doc < 5; $doc++) { ?>
                                <div class="col-lg-10 mx-auto mb-4">
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <div class="pic"></div>
                                                <img src="assets/img/dr.yahya.jpg" alt="dr. Yahya Lengkong" class="img-fluid d-block mx-auto">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">dr. Yahya Lengkong, Sp.KJ</h5>
                                                    <hr>
                                                    <p class="card-text text-justify">dr. Jahja Lengkong, Sp.KJ merupakan seorang Dokter Spesialis Kejiwaan yang berpraktek di Siloam Hospitals Kebon Jeruk. Beliau menyelesaikan pendidikan Spesialis Kedokteran Jiwa di Fakultas Kedokteran, Universitas Indonesia.
                                                        <br> dr. Jahja Lengkong, Sp.KJ tergabung dalam anggota organisasi Ikatan Dokter Indonesia (IDI). Adapun beberapa layanan yang diberikan oleh dr. Jahja Lengkong, Sp.KJ meliputi, Pemeriksaan Medis Kejiwaan.
                                                    </p>
                                                    <p class="card-text"><small><a href="dokter.php" class="btn btn-primary">Lihat Detail</a></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>



                        </div>
                        <div class="row">
                            <div class="col-lg-2 mx-auto">
                                <nav class="d-lg-flex  ">
                                    <ul class="pagination">

                                        <li class="page-item"><a class="page-link" href="?page={{ page_obj.previous_page_number }}" aria-label="Next"><span aria-hidden="true">«</span></a></li>

                                        <li class="page-item active"><a class="page-link" href="?page={{ page_obj.number }}">2</a></li>

                                        <li class="page-item"><a class="page-link" href="?page={{ page_obj.next_page_number }}" aria-label="Next"><span aria-hidden="true">»</span></a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>
    <script>

    </script>
</body>

</html>