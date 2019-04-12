<?php
include 'db.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$file=$_FILES['file']['tmp_name'];
	$cmd="insert into file(name,path) value('$name','$file')";
	if(mysql_query($cmd))
	{
		move_uploaded_file($_FILES['file']['tmp_name'],"image/$name.doc");
		echo "image inserted succesfully";
	}
	else
	{
		echo "image not inserted";
	}
}
?>
<html>
<head>
<title>
	Reg_page
</title>
<body>
	<form method="POST" action="reg.php" enctype="multipart/form-data">
	<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" /></td>
	</tr>
	<tr>
		<td>File Upload:</td>
		<td><input type="file" name="file" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit"/>
		<input type="reset" name="reset" value="Reset"/></td>
	</tr>
	</table>
	</form>
</body>
</html>