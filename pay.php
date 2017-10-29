<!-- pay.php -->
<?php 
	include "conn.php";
	$id = $_GET['id'];
	$SumPrice = $_COOKIE["sum"];
	$sql = "select * from car where S_id = '{$id}'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$num = $SumPrice / $row['price'];
	// echo $num;
	// echo $SumPrice;
	$a = date('Y-m-d H:i:s',time());
	$b=preg_match_all('/\d+/',$a,$arr);
	for ($x=0; $x<=5; $x++) {
  		$array[$x] = $arr[0][$x];
	}
	$date= implode('',$array);

	$sql1 = "insert into dingdan values('{$row['S_id']}','{$row['U_id']}','{$row['S_name']}','{$row['S_type']}','{$row['price']}','$num','{$SumPrice}','$a','$date')";
	// echo $sql1;
	mysql_query($sql1);
	if(mysql_affected_rows()){
		$mysql = "delete from car where S_id = '{$id}'";
		mysql_query($mysql);
		echo "<script>alert('支付成功！');window.location.href='car1.php';</script>";

	}else{
		echo "<script>alert('支付失败');window.location.href='car1.php';</script>";
	}
?>