<?php
session_start();
if(!isset($_SESSION['SESS_KRYPTADMIN_ID']) || (trim($_SESSION['SESS_KRYPTADMIN_ID']) == '')) {
	header("location:../");
	exit();
}

?>
