<!DOCTYPE html>
<html>
<head>
<title>
	homepage
</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 
<body>
<div id="header" style="background-color:black;color:white">
<font size="15px">
<center>
Placement Portal
</font>
</center>
</div>
<div class="topnav" id="myTopnav">
  <a href="homepage.php" class="active">Home</a>
  <div class="dropdown" style="float:right">
  <button class="dropbtn">Sign up 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student/student_register.php">Student</a>
      <a href="company/company_register.php">Company</a>
      <a href="admin/admin_register.php">Institute</a>
    </div>
  </div>
    <div class="dropdown" style="float:right">
    <button class="dropbtn">Log in 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student/student_login.php">Student</a>
      <a href="company/company_login.php">Company</a>
      <a href="admin/admin_login.php">Institute</a>
    </div>
	</div>
	 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
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
<h1>Dashboard</h1>
</div>
<div class="footer">
  <p>created by: Foran</p>
</div>
</body>
</html>
