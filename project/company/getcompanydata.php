<?php
include 'company_register.php';
include 'db.php';
if(isset($_POST['submit']))
{
	$a=mysql_real_escape_string($_POST['cid']);
	$b=mysql_real_escape_string($_POST['cname']);
	$c=mysql_real_escape_string($_POST['address']);
	$d=mysql_real_escape_string($_POST['city']);
	$e=mysql_real_escape_string($_POST['state']);
	$f=mysql_real_escape_string($_POST['email']);
	$g=mysql_real_escape_string($_POST['domain']);	
	$h=mysql_real_escape_string($_POST['noofemp']);
	$i=mysql_real_escape_string($_POST['c_esta_date']);
	$j=mysql_real_escape_string($_POST['pass']);
	$k=md5($_POST['pass']);
	$que="insert into company_details(id,company_name,city,state,address,email,domain,no_of_employee,company_esta_date,password) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$k')";
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