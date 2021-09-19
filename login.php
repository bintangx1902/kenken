<html>

<head>
    <?php include "meta.php"; ?>
    <title>Login</title>
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
                <form action="index.php" class="w-75">
                    <div class="form-group">
                        <h2 class="font-weight-bold text-center">Login</h2>
                    </div>
                    <div class="form-group">


                        <div id="div_id_login" class="form-group"> <label for="id_login" class=" requiredField">
                                Username<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="text" name="login" placeholder="Username" autocomplete="username" maxlength="150" class="textinput textInput form-control" required id="id_login"> </div>
                        </div>
                        <div id="div_id_password" class="form-group"> <label for="id_password" class=" requiredField">
                                Password<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password" placeholder="Password" autocomplete="current-password" class="textinput textInput form-control" required id="id_password"> </div>
                        </div>
                        <div class="form-group">
                            <div id="div_id_remember" class="form-check"> <input type="checkbox" name="remember" class="checkboxinput form-check-input" id="id_remember"> <label for="id_remember" class="form-check-label">
                                    Remember Me
                                </label> </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info w-100">Login</button>
                    </div>
                    <div class="form-group">
                        <a type="button" class="btn btn-google w-100" href="">
                            <i class="fab fa-google"></i>
                            Google Login
                        </a>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        Lupa password? <a class="button text-decoration-none secondaryAction" href="reset-pass.php">reset password</a>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        Belum punya akun? <a href="" class="text-decoration-none">buat akun baru</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "script.php"; ?>

</body>

</html>