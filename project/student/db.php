<?php
$con=mysql_connect("localhost","root","");
if($con)
	echo "<br>";
else
	echo "connecton failed";
$cone=mysql_select_db("project");
if($cone)
	echo "<br></br>";
else
	echo "selection failed";

?>