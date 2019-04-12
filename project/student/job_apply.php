<!DOCTYPE html>
<html>
<head>
	<title>
		job_apply
	</title>
	<link rel="stylesheet" href="student.css" type="text/css">  
	<link rel="stylesheet" href="style.css" type="text/css">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
	<div id="menu">
	<div id="header" style="background-color:black;color:white">
	<font size="15px">
		Placement Portal
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <a href="view_jobs.php">View jobs</a>	
  <a href="upload_data.php">Upload data</a>
  <a href="updates.php"> Interview Updates</a>
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
  <h1>Apply for job</h1>
	<form method="POST" action="getstudentdata.php">
	<table cellpadding="5">
	<tr>
		<td>Student_name:</td>
		<td><input type="text" name="sname" required/></td>
	</tr>
	<tr>
		<td>Mobile_number:</td>
		<td><input type="text" name="mobileno" required/></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email"/></td>
	</tr>
	<tr>
		<td>Semester:</td>
		<td><input type="numeric" name="sem" required/></td>
	</tr>
	<tr>
		<td>Post_name:</td>
		<td><input type="text" name="pname" required/></td>
	</tr>
	<tr>
		<td>Interested:</td>
		<td>Yes<input type="radio" name="interested" value="Yes"/>
			NO<input type="radio" name="interested" value="No"/>
	</tr>
	<tr>
		<td>CPI:</td>
		<td><input type="text" name="cpi" required/></td>
	</tr>
	<tr>
		<td>Medium:</td>
		<td>Gujarati<input type="radio" name="gender" value="Gujarati"/>
			English<input type="radio" name="gender" value="English"/>
			Hindi<input type="radio" name="gender" value="Hindi"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Submit"/>
		<input type="reset" name="reset" value="Reset"/></td>
	</tr>
</table>
</form>
  </div>
  <div class="footer">
  Created by:Foran
  </div>
</body>
</html>