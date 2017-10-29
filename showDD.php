<!-- showDD.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
	<style>
		table{
			margin: auto;
			text-align: center; 
		}
		th{
			width: 200px;
			height: 30px;
			border: 1px solid #000;
		}
		td{
			width: 200px;
			height: 30px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
		<table id="data">
		<thead>
			<tr>
				<th>订单编号</th>
				<th>商品编号</th>
				<th>商品名称</th>
				<th>商品类型</th>
				<th>商品单价</th>
				<th>购买数量</th>
				<th>总价</th>
				<th>生成订单时间</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "conn.php";
			// $S_id = $_SESSION['id'];
			$S_id = "12";
			$sql =  "select * from car where U_id = '{$S_id}'";
			$result = mysql_query($sql);
			while($row = mysql_fetch_assoc($result)){
			?>
				<tr>
					<td><?php echo $row['S_name'] ?></td>
					<td>&yen;<?php echo $row['price'] ?></td>
					<td><button type="submit" onclick="change(this)">-</button>
						<span id="span1">1</span>
						<button type="submit" onclick="change(this)">+</button></td>
					<td>&yen;<?php echo $row['price'] ?></td>
					<td>
					</td>
				</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">购物车</td>
			</tr>
		</tfoot>
		</table>
</body>
</html>