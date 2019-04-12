<?php
include("db.php");
 $select_query = "SELECT 'images_path' FROM file ORDER by 'name' ";
 $sql = mysql_query($select_query) or die(mysql_error());
 while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
?>
<html>
<head>
</head>
<body>
 <table style="border-collapse: collapse; font: 12px Tahoma;" cellspacing="5"
cellpadding="5" border="1">
<tr>
 <td>
 <img src="<?php echo $row['images_path'];?>" alt="" />

 </td>
 </tr>
</table>
<?php
 }
?>
 </body>
 </html>