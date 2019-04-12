<!DOCTYPE html>
<html>
<head>
	<title>
		student_registration_page
	</title>
	<link rel="stylesheet" href="student.css" type="text/css">  
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
<center>
	<div id="menu">
	<div id="header" style="background-color:black;color:white">
	<font size="15px">
		Placement Portal
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Sign up 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="\project/admin/admin_register.php">Institute</a>
      <a href="\project/company/company_register.php">Company</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Log in 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student_login.php">Student</a>
      <a href="\project/company/company_login.php">Company</a>
      <a href="\project/admin/admin_login.php">Institute</a>
    </div>
  </div>
  </div>
  <div id="content">
  <h1> Student registration</h1>
	<form method="POST" action="getstudentdata.php">
	<table cellpadding="5">
	<tr>
		<td>Student_name:</td>
		<td><input type="text" name="sname" required/></td>
	</tr>
	<tr>
		<td>Enrollment_number:</td>
		<td><input type="text" name="sid" required/></td>
	</tr>
	<tr>
		<td>Branch:</td>
		<td><select name="branch" placeholder="branch" />
			<option>Computer</option> 
			<option>Mechanical</option>
			<option>IT</option></td>
	</tr>
	<tr>
		<td>Semester:</td>
		<td><input type="numeric" name="sem" required/></td>
	</tr>
	<tr>
		<td>Medium:</td>
		<td>Gujarati<input type="radio" name="medium" value="Gujarati"/>
			English<input type="radio" name="medium" value="English"/>
			Hindi<input type="radio" name="medium" value="Hindi"/></td>
	</tr>
	<tr>
		<td>College:</td>
		<td><select name="college" />
			<option>GEC</option> 
			<option>GMIT</option>
			<option>SS</option></td>
	</tr>
	<tr>
		<td>CPI:</td>
		<td><input type="text" name="cpi" required/></td>
	</tr>
	<tr>
		<td>Mobile_number:</td>
		<td><input type="numeric" name="mobilenum" required/></td>
	</tr>
	<tr>
		<td>email:</td>
		<td><input type="email" name="email"/></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><input type="password" name="pass" required/></td>
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
  <p>created by: Foran</p>
</div>
</body>
</html>