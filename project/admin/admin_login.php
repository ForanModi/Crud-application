<!DOCTYPE html>
<html>
<head>
	<title>
		admin_login_page
	</title>
	<link rel="stylesheet" href="admin_login.css" type="text/css">  
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
<center>
	<div id="menu">
	<div id="header">
		<font size="15px">
		Placement Portal
	</font>
	</div>
	<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <div class="dropdown" style="float:right">
    <button class="dropbtn">Sign up 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="\project/student/student_register.php">Student</a>
      <a href="\project/company/company_register.php">Company</a>
      <a href="admin_register.php">Institute</a>
    </div>
  </div>
  <div class="dropdown" style="float:right">
    <button class="dropbtn">Log in
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="\project/company/company_login.php">Company</a>
      <a href="\project/student/student_login.php">Student</a>
    </div>
  </div>
  </div>
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

	</div>
	<div id="space">
	</div>
	<div id="content">
		<form method="POST" action="temp.php">
		<table cellpadding="5">
		<tr>
			<td><b>Admin_name:</b></td>
			<td><input type="text" name="aname" required/></td>
		</tr>
		<tr></tr>
		<tr>
			<td><b>Password:</b></td>
			<td><input type="password" name="pass" required/></td>
		</tr>
		<tr></tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Login"/>
				<input type="reset" name="reset"/></td>
		</tr>
		</table>
		</form>
		<b>If not signed up then sign up first.</b>
		<table cellpadding="10">
		<tr>
			<td></td>
			<td>
				<h4><li><a href="admin_register.php">Sign up</a></li></h4>
			</td>
		</tr>
		</table>
	</div>
	<div class="footer">
	created by:foran
	</div>
</center>
</body>
</html>