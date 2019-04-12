<?php
include 'db.php';
$id=$_GET['en_no'];
$status=1;
$cmd="update student_details set status='$status' where en_no=$id";
$result=mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	echo "<script>alert('Request Approved');</script>";
	echo "<script>location.href='approval_student.php';</script>";
}
else
{
	echo "<script>alert('Request not Approved');</script>";
}	
?>