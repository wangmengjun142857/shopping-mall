<!-- p_sc.php -->
<?php
	header("content-type:text/html;charset=utf8");
	if(isset($_POST['dosubmit'])){
		$select1= trim($_POST['select']);
		$text1= trim($_POST['text']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品查看</title>
	<link rel="stylesheet" type="text/css" href="p_sc.css">
</head>
<body>
<?php 
 include "conn.php";
 ?>
	<div class="p_dc">
		<div class="top">
                <center><ul class="title">
                    <li><a href="update.php">修改密码</a></li>
                    <li><a href="p_dc.php">查询订单</a></li>
                    <li><a href="p_sc.php">查询商品</a></li>
                    <li><a href="admin.php">查询用户</a></li>
                    <!-- <li><a href="admin_reg.php">管理员注册</a></li> -->
                    <li><a onclick="javascript:if(!confirm('是否退出？')) { return false; }" session.destory(); href="login.php">退出</a></li>
                </center></ul>
    	</div>
		<div class="p_dc1">
			<form action=""  method="post">
			<div><span>选择查询方式</span>
				<select name="select">
					<option value="option1">全部查看</option>
					<option value="option2">商品Id</option>
					<option value="option3">商品名称</option>
					<option value="option4">商品类型</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>关键字:</span>
				<input type="txet"  name="text"  value=""/>
				<input class="input1" type="submit" name="dosubmit" value="查询" />
			</div>
		</div>
		<div class="p_dc2">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>商品ID</th>
					<th>商品名称</th>
					<th>商品类型</th>
					<th>商品价格</th>
					<th>商品展示</th>
				</tr>
				<!-- 全部查询 -->
				<?php
	 				if(((empty($_POST['select'])) && empty($_POST['text']))) {
	 					$sql1="select S_id,S_name,S_type,price,S_add  from goods;"; 
	 					$result1=mysql_query($sql1);            
				       while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			     <tr>
			        <td><?php echo $row["S_id"];?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			        <td><img src="<?php echo $row['S_add']; ?>" height="80px"></td>
			    </tr>
				<!-- 订单查询 -->
				  <?php } ?>
	 				
	 				<?php }else{

	 				if(isset($_POST['dosubmit'])){
		            if(!(empty($text1)) && $select1=="option2"){
		            	
		           $sql1="select S_id,S_name,S_type,price,S_add  from goods where S_id like '%{$text1}%';"; 
		           
			       $result1=mysql_query($sql1);            
				   while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			     <tr>
			        <td><?php echo $row["S_id"];?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			        <td><img src="<?php echo $row['S_add']; ?>" height="80px"></td>
			    </tr>
				<!-- 商品名称查询 -->
			    <?php } ?>
					<?php }else{
						// echo "<script>alert('操作错误');history.go(-1);</script>";
					if(!(empty($text1)) && $select1=="option3"){
						 $sql1="select S_id,S_name,S_type,price,S_add  from goods where S_name like '%{$text1}%';"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			         { ?>
			     <tr>
			        <td><?php echo $row["S_id"];?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			        <td><img src="<?php echo $row['S_add']; ?>" height="80px"></td>
			    </tr>
			    <!-- 用户名查询 -->
			    <?php } ?>


					<?php }else{

						if(!(empty($text1)) && $select1=="option4"){
						 $sql1="select S_id,S_name,S_type,price,S_add  from goods where S_type like '%{$text1}%';"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			          { ?>
			    <tr>
			        <td><?php echo $row["S_id"];?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			        <td><img src="<?php echo $row['S_add']; ?>" height="80px"></td>
			    </tr>
			    <?php } ?>

						<?php }else{

						if($select1=="option1" && $text1==""){
						 $sql1="select S_id,S_name,S_type,price,S_add  from goods;"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			          { ?>
			    <tr>
			        <td><?php echo $row["S_id"];?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			        <td><img src="<?php echo $row['S_add']; ?>" height="80px"></td>
			    </tr>
			    <?php } 
						}
						}
						 }
					} 
				 } 
			}	?>				
			</table>
		</form>
		</div>
	</div>
</body>
</html>