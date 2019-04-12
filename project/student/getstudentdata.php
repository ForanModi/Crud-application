<?php
include 'student_register.php';
include 'db.php';
if(isset($_POST['submit']))
{
	$a=mysql_real_escape_string($_POST['sname']);
	$b=mysql_real_escape_string($_POST['sid']);
	$c=mysql_real_escape_string($_POST['branch']);
	$d=mysql_real_escape_string($_POST['sem']);
	$e=mysql_real_escape_string($_POST['medium']);
	$f=mysql_real_escape_string($_POST['college']);
	$g=mysql_real_escape_string($_POST['cpi']);	
	$h=mysql_real_escape_string($_POST['mobilenum']);
	$i=mysql_real_escape_string($_POST['email']);
	$j=md5($_POST['pass']);
	$status=0;
	$que="insert into student_details(student_name,en_no,branch,semester,medium,college,cpi,mobile_no,email,password,status) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$status')";
	$result=mysql_query($que) or die(mysql_error($con));
	if($result)
	{
		echo "<script>alert('Data inserted successfully');</script>";
		}
	else
	{
		echo "<script>alert('Error in data insertion');</script>";
	}
}
?>