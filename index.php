<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_KRYPTADMIN_ID'];
	$result = $db->prepare("select * from register where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{		
		$HVS=$row["HVS"];
	}
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
                        <h2>Wallet Id: <?php echo $HVS;?> </h2>
                        <ul class="breadcrumb-menu list-style">
                        </ul>
                    </div>
                </div>
            </div>
            <section class="Login-wrap ptb-100">
                <div class="col-lg-6 offset-lg-3">
                    <a href="members.php" class="btn style4 w-100">
                        <h3 class="mb-0">All Members</h3>
                    </a>
                     <a href="request.php" class="btn style4 w-100">
                        <h3 class="mb-0">Request</h3>
                    </a>
                    <a href="feedbacks.php" class="btn style4 w-100">
                        <h3 class="mb-0">Feedbacks</h3>
                    </a>
                    <a href="logout.php" class="btn style4 w-100">
                        <h3 class="mb-0">Logout</h3>
                    </a>
                </div>
            </section>
        </div>
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