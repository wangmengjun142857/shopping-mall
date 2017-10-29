<!-- del.php -->
<?php 
	// $name=$_GET['U_name'];
	// $name1=$_GET['G_name'];
	include "conn.php";
    $sql="delete * from user where U_name='{$name}'";
    $sql1="delete * from admin where G_name='{$name1}'";
    $result=mysql_query($sql);
	$row=mysql_fetch_assoc($result2);
 ?>