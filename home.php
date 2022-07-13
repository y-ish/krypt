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
                <a href="#" class="btn">
                    <div class="un-item-logo">
                        <!-- <h4 class="text-white">KRYPT</h4> -->
                        <img class="logo-img light-mode" src="images/logo-black2.png" alt="">
                        <img class="logo-img dark-mode" src="images/logo-white2.png" alt="">
                    </div>
                </a>
                <div class="un-block-right">
                    <div class="un-notification">
                        <a href="notifications.php" aria-label="activity">
                            <i class="ri-notification-line"></i>
                        </a>
                        <span class="bull-activity"></span>
                    </div>
                    <div class="un-notification">
                        <a href="notifications.php" aria-label="activity">
                            <i class="ri-equalizer-line"></i>
                        </a>
                    </div>
                </div>
            </header>
            <div class="space-sticky"></div>
            <section class="margin-t-20 stories-section">
                <!-- DISPLAY STRORIES -->
                <div class="display-stories">
                    <!-- SWIPER -->
                    <div class="swiper myStories">
                        <div class="swiper-wrapper wrapper-stories stories user-icon carousel snapgram " id="stories" style="overflow: auto; width:100%;">
                            <div class="story swiper-slide" data-id="userTwo" data-photo="images/swap-icon.png" data-last-updated="1646673856" role="group" aria-label="1 / 5">
                                <a class="item-link" href="../user/index.php">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/send-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Home</strong>
                                    </span>
                                </a>
                            </div>
					<div class="story swiper-slide" data-id="userTwo" data-photo="images/send-icon.png" data-last-updated="1646673856" role="group" aria-label="1 / 5">
                                <a class="item-link" href="send.php">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/send-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Send</strong>
                                    </span>
                                </a>
                            </div>
                            <div class="story swiper-slide" data-id="userThree" data-photo="images/receive-icon.png" data-last-updated="1646753056" role="group" aria-label="2 / 5">
                                <a class="item-link" href="receive.php">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/receive-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Recieve</strong>
                                    </span>
                                </a>
                            </div>
                            <div class="story swiper-slide" data-id="userFour" data-photo="images/buy-icon.png" data-last-updated="1646789056" role="group" aria-label="3 / 5">
                                <a class="item-link" href="">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/buy-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Buy</strong>
                                    </span>
                                </a>
                            </div>
                            <div class="story swiper-slide" data-id="userFive" data-photo="images/swap-icon.png" data-last-updated="1646803456" role="group" aria-label="4 / 5">
                                <a class="item-link" href="">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/swap-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Swap</strong>
                                    </span>
                                </a>
                            </div>
                            <div class="story swiper-slide" data-id="userSix" data-photo="images/lock-icon.png" data-last-updated="1646889856" role="group" aria-label="5 / 5">
                                <a class="item-link" href="freeze.php">
                                    <span class="item-preview">
                                        <img lazy="eager" src="images/lock-icon.png">
                                    </span>
                                    <span class="info" itemprop="author" itemscope="" itemtype="">
                                        <strong class="name" itemprop="name">Freeze</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </section>
            <section class="un-put-on-marketplace">
                <div class="body">
                    <ul class="nav nav-pills nav-tab margin-t-20" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Fixed-tab" data-bs-toggle="pill" data-bs-target="#pills-Fixed" type="button" role="tab" aria-controls="pills-Fixed" aria-selected="true">
                                <span>TOKENS</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Timed-tab" data-bs-toggle="pill" data-bs-target="#pills-Timed" type="button" role="tab" aria-controls="pills-Timed" aria-selected="false">
                                <span>NFTs</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content padding-t-20" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-Fixed" role="tabpanel" aria-labelledby="pills-Fixed-tab">
                            <div class="unList-creatores bg-white">
                                <div class="content-list-creatores">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bitcoin.jpg" type="image/jpg">
                                                        <img class="avt-img" src="images/bitcoin.jpg" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>Bitcoin</h5>
                                                        <p>$31,742.85 + 4.92%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BTC</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/ethereum.png" type="image/png">
                                                        <img class="avt-img" src="images/ethereum.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>Ethereum</h5>
                                                        <p>$1996.40 + 6047%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 ETH</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bnb.png" type="image/png">
                                                        <img class="avt-img" src="images/bnb.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>BNB</h5>
                                                        <p>$321.63 + 1.93%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BNB</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bitcoin.jpg" type="image/jpg">
                                                        <img class="avt-img" src="images/bitcoin.jpg" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>Bitcoin</h5>
                                                        <p>$31,742.85 + 4.92%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BTC</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/ethereum.png" type="image/png">
                                                        <img class="avt-img" src="images/ethereum.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>Ethereum</h5>
                                                        <p>$1996.40 + 6047%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 ETH</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bnb.png" type="image/png">
                                                        <img class="avt-img" src="images/bnb.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>BNB</h5>
                                                        <p>$321.63 + 1.93%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BNB</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bnb.png" type="image/png">
                                                        <img class="avt-img" src="images/bnb.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>BNB</h5>
                                                        <p>$321.63 + 1.93%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BNB</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link visited" href="#">
                                                <div class="item-user-img">
                                                    <picture>
                                                        <source srcset="images/bnb.png" type="image/png">
                                                        <img class="avt-img" src="images/bnb.png" alt="">
                                                    </picture>
                                                    <div class="txt-user">
                                                        <h5>BNB</h5>
                                                        <p>$321.63 + 1.93%</p>
                                                    </div>
                                                </div>
                                                <div class="other-option">
                                                    <div class="color-text rounded-pill bg-snow btn-xs-size">0 BNB</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Timed" role="tabpanel" aria-labelledby="pills-Timed-tab">
                            <p class=" margin-t-40 text-center">Search in Opeasea.io</p>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer-account">
                <label class="switch_toggle toggle_lg theme-switch" for="switchDark">
                    <input type="checkbox" class="switchDarkMode theme-switch" id="switchDark" aria-describedby="switchDark">
                    <span class="handle"></span>
                </label>
                    <h3>Dark Mode</h3>
            </footer>
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