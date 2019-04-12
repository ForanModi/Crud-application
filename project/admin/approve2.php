<?php
include 'db.php';
$id=$_GET['company_name'];
$status=1;
$cmd="update company_details set status='$status' where company_name=$id";
$result=mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	echo "<script>alert('Request Approved');</script>";
	echo "<script>location.href='approval_company.php';</script>";
}
else
{
	echo "<script>alert('Request not Approved');</script>";
}	
?>