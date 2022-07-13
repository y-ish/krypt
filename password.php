<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <title>KRYPT</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <link rel="icon" type="image/png" href="images/favicon/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="images/favicon/icon-96x96.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/remixicon.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendors/zuck_stories/zuck.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>

<body>
    <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <div id="wrapper">
        <div id="content">
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="index.php" class="icon visited">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1>Passcode</h1>
                </div>
            </header>
            <div class="space-sticky"></div>
            <section class="account-section padding-20">
                <div class="display-title">
                    <h1 class="text-center">Enter your Passcode</h1>
                </div>
                <div class="content__form margin-t-40">
                    <form>
                        <div class="form-group icon-left">
                            <div class="input_group">
                                <input type="text" id="demo" class="form-control" placeholder='' required>
                                <div class="icon">
                                    <i class="ri-lock-password-line"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script src="assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/digitalKeyboard.js"></script>
    <script type="text/javascript">
        $("#demo").numKey({
            limit: 6,
            disorder: true
        });
    </script>
</body>


</html>