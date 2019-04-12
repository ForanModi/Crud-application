<?php
include 'post_jobs.php';
include 'db.php';
if(isset($_POST['submit']))
{
	$a=mysql_real_escape_string($_POST['iname']);
	$b=mysql_real_escape_string($_POST['requiredpost']);
	$c=mysql_real_escape_string($_POST['description']);
	$d=mysql_real_escape_string($_POST['noofvacancy']);
	$e=mysql_real_escape_string($_POST['salary']);
	$f=mysql_real_escape_string($_POST['location']);
	$g=mysql_real_escape_string($_POST['keyskills']);	
	$h=mysql_real_escape_string($_POST['period']);
	$i=mysql_real_escape_string($_POST['sdate']);	
	$j=mysql_real_escape_string($_POST['edate']);	
	$que="insert into jobs(company_name,required_post,description,no_of_vacancy,salary,location,key_skills,period,starting_date,ending_date) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
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