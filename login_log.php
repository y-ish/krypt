<?php
	//Start session
	session_start();
	
	include('db_connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qryu = $db->prepare("SELECT * FROM register WHERE email='$email' AND password='$password' and utype='User'");
	$qryu->execute();
	$countu = $qryu->rowcount();
	//Check whether the query was successful or not
	
	$qrya = $db->prepare("SELECT * FROM register WHERE email='$email' AND password='$password' and utype='Admin'");
	$qrya->execute();
	$counta = $qrya->rowcount();
	//Check whether the query was successful or not
	
	if($countu > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsu = $qryu->fetch();
		$_SESSION['SESS_KRYPTUSER_ID'] = $rowsu['Log_Id'];
		session_write_close();
		header("location: user/index.php");
		exit();
	}	
	else if($counta > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsa = $qrya->fetch();
		$_SESSION['SESS_KRYPTADMIN_ID'] = $rowsa['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password Try Again'); window.location='login.php'</script>";
		exit();
	}
?>
