<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_KRYPTADMIN_ID'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/remixicon.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/fancybox.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui-min.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dark-theme.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>KRYPT</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
                        <h2>Feedback</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.php">Home </a></li>
                            <li>Feedback</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="contact-us-wrap pt-100">
                <div class="container">
                    <div class="row align-items-center pb-100">
                        <div class="col-lg-6">
                            <div class="contact-img">
                                <img src="../assets/img/contact-img.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form class="form-wrap" action="action/notification_send.php" method="post" enctype="multipart/form-data">
                                    <div class="content-title mb-20">
                                        <h2>Latest Notifications</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group v1">
                                                <input class="w-100 p-3 rounded border shadow-lg"  name="date" type="date" placeholder="Date" required="">
                                            </div>
                                        </div>
                                        <hr style="visibility:hidden">
                                          <div class="col-md-12">
                                            <div class="form-group v1">
                                                <input class="w-100 p-3 rounded border shadow-lg"  name="time" type="time" placeholder="Time" required="">
                                            </div>
                                        </div>
                                        <hr style="visibility:hidden">
                                          <div class="col-md-12">
                                            <div class="form-group v1">
                                                <input class="w-100 p-3 rounded border shadow-lg"  name="photo" type="file" placeholder="Photo" required="">
                                            </div>
                                        </div>
                                        <hr style="visibility:hidden">
                                        <div class="col-md-12">
                                           <div class="form-group v1">
                                                <textarea class="w-100 p-3 rounded border shadow-lg" name="message" id="message" placeholder="type here..." style="resize: none;" rows="10" required="" data-error="Please enter your feedback"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn style1 mt-3 rounded float-end">Send Notification</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="section-title text-center mb-40">
                                <h2>Get in Touch</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-75 justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <img src="../assets/img/phone-icon.png" alt="Image">
                                </span>
                                <div class="contact-info">
                                    <h3>Contact Us</h3>
                                    <a href="tel:88098787868">+91 9587 154765</a>
                                    <a href="tel:88098787869">+91 9576 234532</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <img src="../assets/img/mail-icon.png" alt="Image">
                                </span>
                                <div class="contact-info">
                                    <h3>Email Us</h3>
                                    <a href="mailto:hello@krypt.com">hello@krypt.com</a>
                                    <a href="mailto:support@krypt.com">support@krypt.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <img src="../assets/img/map-icon.png" alt="Image">
                                </span>
                                <div class="contact-info">
                                    <h3>Our Location</h3>
                                    <p>342/A Brooklyn St, Milson Avenue, New York, USA
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="comp-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                </div> -->
            </section>
        </div>
        <?php include("include/footer.php"); ?>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/jquery-ui-min.js"></script>
    <script src="../assets/js/fancybox.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <script src="../assets/js/jquery.appear.js"></script>
    <script src="../assets/js/tweenmax.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>