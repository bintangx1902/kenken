<?php ?>
<!-- modal start -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Belajar Sehat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <p class="mt-1">
                <h4><b>健</b>康、<b>研</b>究</h4>(けんこう、けんきゅう) : Kenkou, kenkyuu
                </p>
                <div>
                    <h4>Sehat, Belajar.</h4>
                    <p>berawal dari kehidupan yang sehat yaitu gaya hidup yang memperhatikan segala aspek kondisi kesehatan. Mulai dari makanan, minuman, nutrisi yang dikonsumsi dan perilaku kita sehari-hari. Baik itu dalam sebuah rutinitas olahraga
                        yang tentu akan menjaga kondisi kesehatan. Apabila kondisi tersebut sudah tercapai maka hal apapun yang kamu pelajari akan membuat kamu menjadi seorang yang mampu mengolah kejadian di sekitar dengan tanggap
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- modal end -->

<nav class="navbar sticky-top navbar-light navbar-expand-md navigation-clean">
    <div class="container">
        <a data-toggle="modal" href="#exampleModal1" data-target="#exampleModal1" class="navbar-brand">健研</a>

        <button class="navbar-toggler" data-target="#navbarText" data-toggle="collapse" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="daftar-dokter.php">Daftar Psikiater</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Lainnya
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="jadwal-saya.php">Jadwal Saya</a>
                        <a class="dropdown-item" href="tutorial.php">Tutorial Pembayaran</a>
                        <a class="dropdown-item" href="reset-pass.php">Lupa Password</a>
                    </div>

                </li>

            </ul>
        </div>
    </div>
</nav>