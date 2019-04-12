<?php
session_start();
if(isset($_POST['login']))
{
	$u=$_POST['cname'];
	$p=$_POST['pass'];
	if($u=="abc" and $p=="123")
	{
		$_SESSION['username']=$u;
		header('location:company_homepage.php');
	}
	else
	{
		echo "<script>alert('Wrong username or Password');</script>";
		echo '<script>window.location.href = "company_login.php";</script>';
	}
}
?>