<html>

<head>
    <?php include "meta.php"; ?>
    <title>Register Akun</title>
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
                <form action="login.php" class="w-75">
                    <div class="form-group">
                        <h2 class="font-weight-bold text-center">Sign Up</h2>
                    </div>
                    <div class="form-group">


                        <div id="div_id_username" class="form-group"> <label for="id_username" class=" requiredField">
                                Username<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="text" name="username" placeholder="Username" autocomplete="username" minlength="1" maxlength="150" class="textinput textInput form-control" required id="id_username"> </div>
                        </div>
                        <div id="div_id_email" class="form-group"> <label for="id_email" class="">
                                E-mail (optional)
                            </label>
                            <div class=""> <input type="email" name="email" placeholder="E-mail address" autocomplete="email" class="textinput textInput form-control" id="id_email"> </div>
                        </div>
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
                        <button type="submit" class="btn btn-info w-100">Sign Up</button>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        Sudah punya akun? <a href="login.php" class="text-primary">
                            klik disini
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "script.php"; ?>

</body>

</html>