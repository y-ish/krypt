<?php
include("db_connect/db.php");
	
	
	
	$Log_Id="KRP".rand(10000000785,0);	
	$HVS="KRP".date("Y/m/d").rand(10000000785,0).rand(7869658445123,1)."#ABC$"."RCHSKKCRP";	
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$utype="User";
	
	$date=date("Y-m-d");

	

	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	echo $HVS;
		
$sql = "insert into register(Log_Id,HVS,name,email,password,photo,date,utype)values('$Log_Id','$HVS','$name','$email','$password','$photo','$date','$utype')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:login.php");
?>

