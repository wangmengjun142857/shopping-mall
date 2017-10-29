<!-- insertcar.php -->
<?php 
	session_start();
	$S_id = $_GET['id'];
	$U_id = $_SESSION['id'];
	// $U_id = "12";
	echo $U_id;
	include "conn.php";
	$sql2 = "select * from car where S_id = '{$S_id}' and U_id = '{$U_id}'";
	$row2 = mysql_fetch_assoc(mysql_query($sql2));
	if(empty($row2)){
		$sql = "select * from goods where S_id = '{$S_id}'";
		$row = mysql_fetch_assoc(mysql_query($sql));
		$sql1 = "insert into car values('{$U_id}','{$S_id}','{$row['S_name']}','{$row['S_type']}','{$row['price']}')";
		mysql_query($sql1);
		if(mysql_affected_rows() >= 1){
			echo "<script>alert('加入购物车成功');window.location.href='car.php';</script>";
		}
		else{
			echo "<script>alert('加入购物车失败');window.location.href='products.php';</script>";
		}
	}else{
		echo "<script>alert('购物车已有该商品');window.location.href='car.php';</script>";
	}
 ?>