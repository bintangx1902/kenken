<html>

<head>
    <?php include "meta.php"; ?>
    <title>Jadwal Saya</title>
</head>

<body>
    <?php include "head.php"; ?>
    <div class="jumbotron bg-transparent mybg mb-0">
        <div class="row">

            <div class="col-lg-8 mx-auto my-auto">
                <img src="assets/img/6247.png" alt="Schedule" class="img-fluid">
            </div>

            <div class="col-lg-4 my-auto">
                <h3 class="display-4 bold">Jadwal Temu Dokter </h3>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">

        <div class="card border-0">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dengan Dokter</th>
                            <th scope="col">Pada Jam dan Tanggal</th>
                            <th scope="col">Metode </th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($sc = 0; $sc < 6; $sc++) { ?>
                            <tr>
                                <th scope="row"><?php echo $sc; ?></th>
                                <td>dr. Yahya Lengkong SpKj.</td>
                                <td>
                                    <?php
                                    if ($sc >= 3) { ?>
                                        30 September 2021 - 15:30
                                    <?php
                                    } else { ?>
                                        25 September 2021 - 10.45
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($sc < 3) {
                                        if ($sc == 0) { ?>
                                            <a href="meet.php"><span class="text-primary"><i class="icon ion-videocamera"></i> <em>Online Meet</em></span></a>
                                        <?php } else { ?>
                                            <span class="text-secondary"><i class="icon ion-videocamera"></i> <em>Online Meet</em></span>
                                        <?php } ?>

                                    <?php } else { ?>
                                        <span class="text-info"><i class="icon ion-ios-stopwatch"></i> Temu Langsung</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php
                                    if ($sc >= 2) { ?>
                                        <span class="text-success"><i class="icon ion-checkmark-round"></i> Sudah Selesai</span>
                                    <?php
                                    } else { ?>
                                        <span class="text-warning"><i class="icon ion-load-d"> Sesuai Jadwal</i></span>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <?php include "footer.php"; ?>
</body>

</html>