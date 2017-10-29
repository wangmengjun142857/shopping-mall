<!-- cardelete.php -->
<?php 
	include "conn.php";
	$id = $_GET['id'];
	$sql = "delete from car where S_id = '{$id}'";
	mysql_query($sql);
	if(mysql_affected_rows() >= 1){
		echo "<script>alert('删除成功');window.location.href='car.php';</script>";
	}
	else{
		echo "<script>alert('删除失败');window.location.href='car.php';</script>";
	}
 ?>