<!DOCTYPE html>
<html>
<head>
	<title>
		view_jobs
	</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#header
{
	background-color:black;
	color:white;
	text-align:center;
	height:8%;
	width:100%;padding:8px;
 }
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#111;
   color: white;
   text-align:left;
}
body {margin:0;font-family:Arial Rounded MT Bold}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
	
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
	<div id="menu">
	<div id="header">
		<font size="15px">
		Placement Portal
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <a href="updates.php">Updates</a>
  <a href="upload_data.php">Upload data</a>
   <a href="student_login.php" style="float:right">logout</a>  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<div id="content">
	<center>
<h1>All the data are as below</h1>
<table border="1"  cellpadding="5px">
	<th>Company_name</th>
	<th>Required_post</th>
	<th>Description</th>
	<th>No. of vacancy</th>
	<th>Salary</th>
	<th>Location</th>
	<th>Key_skill</th>
	<th>Period</th>
	<th>Starting_date</th>
	<th>Ending_date</th>
<?php
	include 'db.php';
	$cmd="select * from jobs";
	$result=mysql_query($cmd) or die(mysql_error($con));
	while($row=mysql_fetch_array($result))
	{
		$a=$row['company_name'];
		$b=$row['required_post'];
		$c=$row['description'];
		$d=$row['no_of_vacancy'];
		$e=$row['salary'];
		$f=$row['location'];
		$g=$row['key_skills'];
		$h=$row['period'];
		$i=$row['starting_date'];
		$j=$row['ending_date'];
?>

<tr>
		<td><?php  echo $a; ?></td>
		<td><?php  echo $b; ?></td>
		<td><?php  echo $c; ?></td>
		<td><?php  echo $d; ?></td>
		<td><?php  echo $e; ?></td>
		<td><?php  echo $f; ?></td>
		<td><?php  echo $g; ?></td>
		<td><?php  echo $h; ?></td>
		<td><?php  echo $i; ?></td>
		<td><?php  echo $j; ?></td>
		</tr>
  <?php
    }
  ?>
		</table>	
</center>
</div>	
	<div class="footer">
	created by:Foran
	</div>
</body>
</html>