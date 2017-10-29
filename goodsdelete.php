<!-- goodsdelete.php -->
<?php 
	include "conn.php";
	$id = $_GET['id'];
	// echo $id;
	$mysql = "delete from goods where S_id = '{$id}'";
	// die();
	mysql_query($mysql);
	if(mysql_affected_rows() >= 1){
		echo "<script>alert('删除成功');window.location.href='select.php';</script>";
	}
	else{
		echo "<script>alert('删除失败');window.location.href='select.php';</script>";
	}
 ?>