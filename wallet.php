<?php	
	include('db_connect/db.php');
?>	
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
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="profile.php">Profile </a></li>
                            <li>Wallet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="item-rank-wrap ptb-100">
                <div class="container">
                    <div class="rank-table">
                       <table class="table">
                        	<thead>
                            	<tr>
                                	<th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                    <th>Site</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
									$result = $db->prepare("select * from wallet");
									$result->execute();
									for($i=1; $row = $result->fetch(); $i++)
									{		
								  ?> 
                                <tr>
                                    <td style="text-align: left;">
                                        <div class="top-product">
                                            <div class="top-product-img">
                                                <img src="../photo/<?php echo $row["photo"];?>" alt="Image">
                                            </div>
                                            <h6><?php echo $row["name"];?></h6>
                                        </div>
                                    </td>
                                    <td class="text-green">
                                        <span class="positive"><?php echo $row["date"];?></span>
                                    </td>
                                     <td class="text-green">
                                        <span class="positive"><?php echo $row["time"];?></span>
                                    </td>
                                     <td class="text-green">
                                        <span class="positive"><?php echo $row["amount"];?></span>
                                    </td>
                                     <td class="text-green">
                                        <span class="positive"><a href="<?php echo $row["url"];?>" target="_blank"><?php echo $row["url"];?></a></span>
                                    </td>
                                </tr>  
                               <?php }?>                         
                            </tbody>
                        </table>
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