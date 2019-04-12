<!DOCTYPE html>
<html>
<head>
	<title>
		jobs
	</title>
	<link rel="stylesheet" href="company.css" type="text/css">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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

.topnav{
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
    float: right;
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
<center>
	<div id="menu">
	<div id="header">
		<font size="15px">
		Placement Portal
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="" class="active">Home</a>
  <a href="detailsofstudents.php">Details of students</a>
  <a href="interviewupdates.php">Interview Updates</a>
  
   <a href="company_login.php" style="float:right">logout</a>
  </div>  
</div>
	<div id="space">
	</div>
	<div id="content">
	<h1>Post Jobs</h1>
		<form method="POST" action="getjobdetails.php">
	<table cellpadding="5">
	<tr>
		<td>Company Name:</td>
		<td><input type="text" name="iname" required/></td>
	</tr>
	<tr>
		<td>Required Post:</td>
		<td><input type="text" name="requiredpost" required/></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="description" required/></textarea></td>
	</tr>
	<tr>
		<td>No. of vacancy:</td>
		<td><input type="numeric" name="noofvacancy" required/></td>
	</tr>
	<tr>
		<td>Salary:</td>
		<td><input type="text" name="salary" required/></td>
	</tr>
	<tr>
		<td>Location:</td>
		<td><textarea name="location" required/></textarea></td>
	</tr>
	<tr>
		<td>Key Skills:</td>
		<td><textarea name="keyskills" required/></textarea></td>
	</tr>
	<tr>
		<td>Period:</td>
		<td><input type="text" name="period" required/></td>
	</tr>
	<tr>
		<td>Starting Date:</td>
		<td><input type="date" name="sdate"/></td>
	</tr>
	<tr>
		<td>Ending Date:</td>
		<td><input type="date" name="edate"/></td>
	</tr>
	<tr>
		<td></td><td><input type="submit" name="submit" value="Submit"/>
		<input type="reset" name="reset" value="Reset"/></td>
	</tr>
	</table>
	</form>
	</div>
	<div class="footer">
	created by:Foran
	</div>
</body>
</html>