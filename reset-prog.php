<html>

<head>
    <?php include "meta.php"; ?>
    <title>Setting Up New Password</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <?php include "head.php"; ?>
    <div class="container-fluid">
        <div class="main-row row">
            <div class="ilustration-container col-md-7 bg-info d-md-flex d-none">

                <img src="assets/img/4864.png" alt="Login" class="img-fluid mt-5">
            </div>
            <div class="col-md-5 col-12 d-flex align-items-center justify-content-center">
                <form action="login.php" class="w-75">
                    <div class="form-group">
                        <h2 class="font-weight-bold text-center">Reset Password</h2>
                    </div>
                    <div class="form-group">

                        <div id="div_id_password1" class="form-group"> <label for="id_password1" class=" requiredField">
                                Password<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password1" placeholder="Password" autocomplete="new-password" class="textinput textInput form-control" required id="id_password1"> </div>
                        </div>
                        <div id="div_id_password2" class="form-group"> <label for="id_password2" class=" requiredField">
                                Password (again)<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password2" placeholder="Password (again)" class="textinput textInput form-control" required id="id_password2"> </div>
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