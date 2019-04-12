<?php
include 'upload_data.php';
include 'db.php';
if(isset($_POST['submit1']))
{
	$p=mysql_real_escape_string($_POST['id']);
	$a=mysql_real_escape_string($_POST['pname']);
	$b=mysql_real_escape_string($_POST['pdescription']);
	$c=mysql_real_escape_string($_POST['frontend']);
	$d=mysql_real_escape_string($_POST['backend']);
	$e=mysql_real_escape_string($_POST['duration']);
	$f=mysql_real_escape_string($_POST['noofmembers']);
	$g=mysql_real_escape_string($_POST['eventname']);
	$h=mysql_real_escape_string($_POST['pdescription']);
	$i=mysql_real_escape_string($_POST['tech']);
	$j=mysql_real_escape_string($_POST['eventname']);
	$k=mysql_real_escape_string($_POST['pdescription']);
	$l=mysql_real_escape_string($_POST['tech']);
	$m=mysql_real_escape_string($_POST['eventname']);
	$n=mysql_real_escape_string($_POST['pdescription']);
	$o=mysql_real_escape_string($_POST['tech']);
	$que="insert into studentactivity(id,p_projectname,p_description,p_frontend,p_backend,p_duration,p_members,t_eventname,t_description,
	t_certificate,n_eventname,n_description,n_certificate,c_eventname,c_description,c_certificate) values('$p','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
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