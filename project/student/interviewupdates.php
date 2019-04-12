<!DOCTYPE html>
<html>
<head>
<title>
	student_homepage
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

<div class="header">
<font size="15px">
	Placement Portal
	</font>
</div>

<div class="topnav" id="myTopnav">
  <a href="\project/homepage.php" class="active">Home</a>
  <a href="view_jobs.php">View Jobs</a>
  <a href="detailsofstudents.php">Details of student</a>
   <a href="company_login.php" style="float:right">logout</a>  
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
Interview Updates
</div>
</body>
</html>
