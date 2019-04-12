<?php
include 'db.php';
$id=$_GET['en_no'];
$status=2;
$cmd="delete from student_details where en_no=$id";
$result=mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	echo "<script>alert('Request Rejected');</script>";
	echo "<script>location.href='approval_student.php';</script>";
}
else
{
	echo "<script>alert('Request not Rejected');</script>";
}	
?>