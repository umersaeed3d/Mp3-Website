<?php
@ob_start();
session_start(); 
include('config.php');

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select username from login where email = '$user_check' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['username'];


if(!isset($_SESSION['login_user'])){
	header("location:admin-login.php");
	
}
?>