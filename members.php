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
                        <h2>Members </h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="dashboard.php">Dashboard </a></li>
                            <li>Members</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="author-wrap ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                     <?php
					    $result = $db->prepare("select * from snedmonay");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++)
						{		
					  ?>    
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                            <div class="author-card style2">
                                <div class="author-info-wrap pt-0">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="../photo/<?php echo $row["photo"];?>" alt="Image">
                                        </div>
                                        <div class="author-name">
                                            <h3><a href="trans-history.php<?php echo '?Log_Id='.$row['Log_Id']; ?>"><?php echo $row["name"];?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php }?>                         
                    </div>
                </div>
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