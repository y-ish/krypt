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
    

</head>

<body>
    <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <div id="wrapper">
        <div id="content">
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="home.php" class="icon visited">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1>Freeze</h1>
                </div>
            </header>
            <div class="space-sticky"></div>
            <form>
                <section class="account-section padding-20">
                    <div class="display-title text-center">
                        <img src="images/lock-icon2.png">
                    </div>
                    <div class="content__form margin-t-40">
                        <div class="form-group icon-left">
                            <div class="input_group">
                                <input type="number" class="form-control" placeholder='enter amount' required>
                                <div class="icon">
                                    <i class="ri-currency-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-left">
                            <div class="input_group">
                                <input type="date" class="form-control" placeholder='wallet id' required>
                                <div class="icon">
                                    <i class="ri-wallet-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-left">
                            <div class="input_group">
                                <select class="form-control w-100" required>
                                    <option value="">choose type</option>
                                </select>
                                <div class="icon">
                                    <i class="ri-file-list-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer-account">
                    <div class="env-pb">
                        <div class="display-actions mb-2">
                            <button type="reset" class="btn btn-sm-arrow bg-warning">
                                <p>Reset</p>
                                <div class="ico">
                                    <i class="ri-restart-line"></i>
                                </div>
                            </button>
                            <button type="submit" class="btn btn-sm-arrow bg-primary">
                                <p>Send</p>
                                <div class="ico">
                                    <i class="ri-check-line"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>

    <script src="assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


</html>