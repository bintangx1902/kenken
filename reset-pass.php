<html>

<head>
    <?php include "meta.php"; ?>
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <?php include "head.php"; ?>
    <div class="container-fluid">
        <div class="main-row row mx-auto">
            <div class="ilustration-container col-md-7 bg-info d-md-flex d-none">

                <img src="assets/img/4864.png" alt="Login" class="img-fluid mt-5">
            </div>
            <div class="col-md-5 col-12 d-flex align-items-center justify-content-center">
                <form action="reset-prog.php" class="w-75">
                    <div class="form-group">
                        <h2 class="font-weight-bold text-center">Reset Password</h2>
                    </div>
                    <div class="form-group">

                        <div id="div_id_email" class="form-group"> <label for="id_email" class="">
                                E-mail*
                            </label>
                            <div class=""> <input type="email" name="email" placeholder="E-mail address" autocomplete="email" class="textinput textInput form-control" id="id_email"> </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info w-100">Reset Password Saya</button>
                    </div>

                    <div class="form-group" style="text-align: center;">
                        Belum punya akun? <a href="register.php" class="text-decoration-none">buat akun baru</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "script.php"; ?>

</body>

</html>