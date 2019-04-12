<?php
include 'interviewupdates.php';
include 'db.php';
if(isset($_POST['submit']))
{
	$a=mysql_real_escape_string($_POST['iname']);
	$b=mysql_real_escape_string($_POST['idate']);
	$c=mysql_real_escape_string($_POST['time']);
	$d=mysql_real_escape_string($_POST['location']);
	$e=mysql_real_escape_string($_POST['requiredpost']);
	$f=mysql_real_escape_string($_POST['noofvacancy']);
	$g=mysql_real_escape_string($_POST['description']);	
	$que="insert into interview_updates(company_name,interview_date,time,location,required_post,no_of_vacancy,description) values('$a','$b','$c','$d','$e','$f','$g')";
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