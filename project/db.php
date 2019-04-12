<?php
$con=mysql_connect("localhost","root","");
if($con)
	echo "connection successful<br>";
else
	echo "connecton failed";
$cone=mysql_select_db("project");
if($cone)
	echo "selection successful<br></br>";
else
	echo "selection failed";

?>