<!DOCTYPE html>
<html>
<head>
	<title>
		admin_registration_page
	</title>
	<link rel="stylesheet" href="admin.css" type="text/css">  
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
		Placement Details
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Sign up 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="\project/student/student_register.php">Student</a>
      <a href="\project/company/company_register.php">Company</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Log in 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="\project/student/student_login.php">Student</a>
      <a href="\project/company/company_login.php">Company</a>
      <a href="admin_login.php">Institute</a>
    </div>
  </div>
  </div>
  <div id="content">
  <h1> Admin Registration</h1>
	<form method="POST" action="getadmindata.php">
	<table cellpadding="5" >
	<tr>
		<td>Institute_name:</td>
		<td><input type="text" name="iname" required/></td>
	</tr>
	<tr>
		<td>Institute_id:</td>
		<td><input type="text" name="iid" required/></td>
	</tr>
	<tr>
		<td>Type:</td>
		<td><select name="clg" />
			<option>Degree</option> 
			<option>Diploma</option>
			<option>University</option></td>
	</tr>
	<tr>
		<td>Principle_name:</td>
		<td><input type="text" name="pname" required/></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><textarea name="address" required/></textarea></td>
	</tr>
	<tr>
		<td>city:</td>
		<td><select name="city" />
			<option>ahmedabad</option> 
			<option>mumbai</option>
			<option>bhavnagar</option></td>
	</tr>
	<tr>
		<td>Pincode:</td>
		<td><input type="text" name="pincode" required/></td>
	</tr>
	<tr>
		<td>State:</td>
		<td><select name="state" />
			<option>Gujarat</option> 
			<option>Goa</option>
			<option>Delhi</option></td>
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
  created by:Foran
  </div>
</body>
</html>