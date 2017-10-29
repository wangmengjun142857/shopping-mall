<!-- delete1.php -->
<?php 
	session_start();
	include "conn.php";
	$uName=$_SESSION['fid'];
	$flag = $_SESSION['flag'];
	// echo $uName;
	// echo $flag;
	if($flag == 2 ){
		$table = "user";
		$id = "U_id";
	}else{
		$table = "admin";
		$id = "G_id";
	}
	$sql = "delete from $table where $id = $uName ";
	mysql_query($sql);
	if(mysql_affected_rows()){
		echo "<script>alert('删除成功');window.location.href='cg_search.php';</script>";
	}else{
		echo "<script>alert('删除失败');window.location.href='cg_search.php';</script>";
	}
 ?>