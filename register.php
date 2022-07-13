<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/jquery-ui-min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>KRYPT</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <?php include("include/pre-loader.php"); ?>
    <div class="page-wrapper">
        <?php include("include/header.php"); ?>
        <div class="content-wrapper">
            <div class="breadcrumb-wrap bg-f br-4">
                <div class="overlay bg-black op-7"></div>
                <div class="container">
                    <div class="breadcrumb-title">
                        <h2>Register New Account</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.php">Home </a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="Login-wrap ptb-100">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="login-form-wrap">
                                <div class="login-header">
                                    <h3>Register New Account</h3>
                                    <p>Welcome!! Create A New Account</p>
                                </div>
                                <div class="login-form">
                                    <div class="login-body">
                                        <form class="form-wrap" action="register_save.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="text" name="name" type="text" placeholder="Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="email" name="email" type="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="pwd" name="password" type="password" placeholder="Password" required>
                                                    </div>
                                                </div>                                                                                              
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="mb-0">Passport Size Photo</label>
                                                        <input id="file" name="photo" type="file" required>
                                                    </div>
                                                </div>                                               
                                                <div class="col-sm-12 col-12 mb-20">
                                                    <div class="checkbox style3">
                                                        <input type="checkbox" id="test_1">
                                                        <label for="test_1">
                                                            I Agree with the <a class="link style1" href="terms-of-service.html">Terms &amp; conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <button class="btn style1" type="submit">
                                                            Register Now
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="mb-0">Have an Account? <a class="link style1" href="login.php">Log In</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-img">
                                <img src="assets/img/register.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include("include/footer.php"); ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery-ui-min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>