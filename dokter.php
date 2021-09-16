<!DOCTYPE html>
<html lang="en">

<head>
    <title>lomba</title>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="assets/css/dokter.css">
</head>

<body>

    <?php include 'head.php'; ?>

    <div class="jumbotron bg-primary mybg mb-5">
        <div class="container d-flex flex-column align-items-center d-block">
            <img src="assets/img/5063.png" alt="Meditasi" class="img-fluid">
            <h1 class="bold display-4 ">Konsultasi</h1>
            <p>Buatlah janji temu dan konsultasikan keluhanmu dengan dr. Yahya Lengkong SpKJ., agar kemajuan untukmu.</p>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <img src="assets/img/dr.yahya-big.jpg" alt="dr yahya lengkong" class="img-fluid mb-3">
                    <!-- <div class="d-flex "> -->
                    <form action="checkout.php" class="d-flex">
                        <button class="col btn btn-lg btn-info">Buat janji Konsultasi</button>
                    </form>
                    <!-- </div> -->
                </div>
                <div class="col-lg-8 mt-2 mb-5">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="">
                            <h2 class="font-weigth-bold">dr. Yahya Lengkong SpKJ.</h2>
                        </div>
                        <div class="h6 text-primary"><i class="icon ion-thumbsup"></i>&nbsp; 95% Menyukai</div>
                    </div>
                    <hr>
                    <div class="text-justify">
                        dr. Jahja Lengkong, Sp.KJ merupakan seorang Dokter Spesialis Kejiwaan yang berpraktek di Siloam Hospitals Kebon Jeruk. Beliau menyelesaikan pendidikan Spesialis Kedokteran Jiwa di Fakultas Kedokteran, Universitas Indonesia.
                        dr. Jahja Lengkong, Sp.KJ tergabung dalam anggota organisasi Ikatan Dokter Indonesia (IDI). Adapun beberapa layanan yang diberikan oleh dr. Jahja Lengkong, Sp.KJ meliputi, Pemeriksaan Medis Kejiwaan.
                    </div>
                    <hr>
                    <div class="card ">
                        <div class="card-body">
                            <h4>Lokasi & Jadwal</h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="assets/img/siloam.jpg" alt="Siloam Hospital" class="img-fluid">
                                </div>
                                <div class="col-lg-9">
                                    <h4>Siloam Hospital Kebon Jeruk</h4>
                                    <p class="text-primary">Jasa Konsultasi mulai dari Rp 300.000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="bg-transparent">
                                <div class="accordion" id="accordionExample">
                                    <div class="card ">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-transparent text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Senin, 20 September 2021
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="container mb-0">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <i class="text-primary icon ion-android-sunny"></i>&nbsp;<span>Pagi</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>08.30 - 14.00 &nbsp;&nbsp;<a href="checkout.php" class="btn btn-info">Buat Janji</a></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <i class="text-primary icon ion-ios-partlysunny-outline"></i>&nbsp;<span>Sore</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>17.00 - 19.30 &nbsp;&nbsp;<a href="checkout.php" class="btn btn-info">Buat Janji</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a class="btn btn-transparent text-left text-decoration-none  collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Selasa, 21 September 2021
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="container mb-0">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <i class="text-primary icon ion-android-sunny"></i>&nbsp;<span>Pagi</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>08.30 - 14.00 &nbsp;&nbsp;<a href="checkout.php" class="btn btn-info">Buat Janji</a></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <i class="text-primary icon ion-ios-partlysunny-outline"></i>&nbsp;<span>Sore</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>17.00 - 19.30 &nbsp;&nbsp;<a href="checkout.php" class="btn btn-info">Buat Janji</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-transparent text-left text-decoration-none  collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Kamis, 23 September 2021
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="container mb-0">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <i class="text-primary icon ion-android-sunny"></i>&nbsp;<span>Pagi</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>08.30 - 14.00 &nbsp;&nbsp;<a href="checkout.php" class="btn btn-info">Buat Janji</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group d-block">
                                <a type="button" data-toggle="collapse" data-target="#checkbox-container" aria-expanded="false" aria-controls="checkbox-container" class="mt-2 btn collapsed">Lihat Jadwal Dokter
                                    <svg style="height: 24px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div class="collapse" id="checkbox-container">

                                    <div class="card mb-2 border-0">
                                        <div class="d-flex flex-row justify-content-end">
                                            <div class="col-lg-8">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Hari</th>
                                                            <th scope="col">Jam</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>Senin</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-lg-12">08.30 - 14.00</div>
                                                                    <div class="col-lg-12">17.00 -19.30</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td>Selasa</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-lg-12">08.30 - 14.00</div>
                                                                    <div class="col-lg-12">17.00 -19.30</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td>Kamis</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-lg-12">08.30 - 14.00</div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="comments1" class="bg-transparent" data-aos="zoom-out">

        <div class="card bg-transparent mybg border-0">
            <div class="card-body">
                <div class="container">
                    <div class="d-flex justify-content-end">
                        <a href="" data-toggle="modal" data-target="#modalComment" class="text-info">Tambahkan komentar</a>

                    </div>


                    <?php for ($cm = 0; $cm < 6; $cm++) { ?>
                        <div>
                            <div class="font-weight-bold mt-5">Nama <?php echo $cm; ?></div>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus veniam, deserunt beatae ad dolore corrupti quam quae velit iusto enim libero? Reiciendis omnis quis blanditiis consectetur laboriosam, in culpa doloremque.</p>
                            </div>
                            <hr>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <!-- modal start -->
    <div class="modal fade" id="modalComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berikan Ulasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="tea">Isi Ulasan</label>
                            <textarea name="" id="tea" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

    <?php include 'footer.php'; ?>
</body>

</html>