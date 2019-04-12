<!DOCTYPE html>
<html>
<head>
	<title>
		student_information_page
	</title>
	<link rel="stylesheet" href="student.css" type="text/css">  
	<link rel="stylesheet" href="style.css" type="text/css">  
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

<div class="header">
<font size="15px">
	Placement Portal
	</font>
</div>

<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <a href="view_jobs.php">View jobs</a>
  <a href="updates.php">Updates</a>
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
<div class="content">
<center>
<h1>Student Inforamtion</h1>
<div id="project" style="float:left;height:60%;width:24%;border-right:2px solid">
<form method="POST" action="studentinfo.php">
	<table cellpadding="4">
	<tr><td><h2>Project</h2></td></tr>
	<tr>
		<td>Student Id:</td>
		<td><input type="text" name="id" required/></td>
	</tr>
	<tr>
		<td>Project Name:</td>
		<td><input type="text" name="pname" required/></td>
	</tr>
	<tr>
		<td>Project Description:</td>
		<td><textarea name="pdescription" required/></textarea></td>
	</tr>
	<tr>
		<td>Front end:</td>
		<td><textarea name="frontend" required/></textarea></td>
	</tr>
	<tr>
		<td>Back end:</td>
		<td><textarea name="backend" required/></textarea></td>
	</tr>
	<tr>
		<td>Project Duration:</td>
		<td><input type="text" name="duration" required/></td>
	</tr>
	<tr>
		<td>Members:</td>
		<td><input type="numeric" name="noofmembers" required/></td>
	</tr>
	<tr>
		<td></td><td><input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="addpro" value="Add more"/></td>
	</tr>
	</table>

	</div>
	<div id="technical"style="float:left;height:60%;width:24%;border-right:2px solid">

	<table cellpadding="4">
	<tr><td><h2>Technical Event</h2></td></tr>
	<tr>
		<td>Event Name:</td>
		<td><input type="text" name="eventname" required/></td>
	</tr>
	<tr>
		<td>Project Description:</td>
		<td><textarea name="pdescription" required/></textarea></td>
	</tr>
	<tr>
		<td>certificate:</td>
		<td><input type="file" name="tech" required/></td>
	</tr>
	<tr>
		<td></td><td>
		<input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="addpro" value="Add more"/></td>
	</tr>
	</table>
	
</div>
<div id="nontech" style="float:left;height:60%;width:24%;border-right:2px solid">
	
	<table cellpadding="4">
	<tr><td><h2>Nontech Event</h2></td></tr>
	<tr>
		<td>Event Name:</td>
		<td><input type="text" name="eventname" required/></td>
	</tr>
	<tr>
		<td>Project Description:</td>
		<td><textarea name="pdescription" required/></textarea></td>
	</tr>
	<tr>
		<td>certificate:</td>
		<td><input type="file" name="tech" required/></td>
	</tr>
	<tr>
		<td></td><td>
		<input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="addpro" value="Add more"/></td>
	</tr>
	</table>
	
</div>
<div id="nontech" style="float:left;height:60%;width:24%">
	
	<table cellpadding="4">
	<tr><td><h2>Curricular Event</h2></td></tr>
	<tr>
		<td>Event Name:</td>
		<td><input type="text" name="eventname" required/></td>
	</tr>
	<tr>
		<td>Event Description:</td>
		<td><textarea name="pdescription" required/></textarea></td>
	</tr>
	<tr>
		<td>certificate:</td>
		<td><input type="file" name="tech" required/></td>
	</tr>
	<tr>
		<td></td><td><input type="submit" name="submit1" value="Submit"/>
		<input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="addpro" value="Add more"/></td>
	</tr>
	</table>
	</form>
</div>

</center>
</body>
</html>