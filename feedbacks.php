<?php
	include("auth.php");
	include('../db_connect/db.php');
	$Log_Id=$_SESSION['SESS_KRYPTADMIN_ID'];
	$result = $db->prepare("select * from register where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{		
		$name=$row["name"];
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
                        <h2>Feedbacks </h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="transaction.php">Feedbacks </a></li>
                            <li>Feedbacks</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="author-wrap ptb-100">
                <div class="container">
                    <div class="rank-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Feedback</th>
                                    <th scope="col">Reply</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Reply</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
								$result = $db->prepare("select * from feedback where Log_Id='$Log_Id'");
								$result->execute();
								for($i=1; $row = $result->fetch(); $i++)
								{		
							  ?>   
                                <tr>
                                    <td>
                                       <?php echo $i;?>
                                    </td>
                                    <td style="text-align: left;">
                                        <?php echo $row["message"];?>
                                    </td>
                                     <td style="text-align: left;">
                                        <?php echo $row["reply"];?>
                                    </td>
                                    <td style="text-align: left;">
                                        <?php echo $row["date"];?>
                                    </td>
                                    <td style="text-align: left;">
                                    	<?php 
										if($row["reply"]=="")
										{
										?>
                                        <a href="feedback.php<?php echo '?fdk_id='.$row['fdk_id']; ?>" class="bg-success px-3 py-2 rounded text-white">Reply</a>
                                        <?php
										}
										else
										{										
										?>
                                         <?php echo "Send";?>
                                        <?php
										}
										?>
                                    </td>
                                </tr>
                               <?php
								}
							   ?>
                            </tbody>
                        </table>
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