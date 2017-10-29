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
	<title>订单查看</title>
	<link rel="stylesheet" type="text/css" href="p_dc.css">
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
                    <li><a onclick="javascript:if(!confirm('是否退出？')) { return false; }" session.destory(); href="login.php">退出</a></li>
                </center></ul>
    	</div>
		<div class="p_dc1">
			<form action="p_dc.php"  method="post">
			<div>
				<select name="select">
					<option value="option1" >全部查看</option>
					<option value="option2">用户Id</option>
					<option value="option3">用户名</option>
					<option value="option4">商品名称</option>
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
					<th>用户id</th>
					<th>商品名称</th>
					<th>商品类型</th>
					<th>商品价格</th>
					<th>商品数量</th>
					<th>总金额</th>
					<th class="th1">订单时间</th>
					<th class="th1">订单ID</th>
				</tr>
				<!-- 全部查询 -->
				<?php
					if(((empty($_POST['select'])) && empty($_POST['text']))){
	 					$sql1="select * from dingdan;"; 
	 					$result1=mysql_query($sql1);            
				       while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			     <tr>
			        <td><?php echo $row["S_id"];?></td> 
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			       	<td><?php echo $row['num']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['priceSum']; ?></td>
			        <td><?php echo $row['time']; ?> </td>
			        <td><?php echo $row['D_id']; ?></td>
			    </tr>
				<!-- 订单查询 -->
				  <?php } ?>
	 				
	 				<?php }else{
	 				// $select1= $_POST['select'];
	 				// $text1= $_POST['text'];

	 				if(isset($_POST['dosubmit'])){
		            if(!(empty($text1)) && $select1=="option2"){
		            	
		            $sql1="select *  from dingdan where D_id like '%{$text1}%';"; 
			       $result1=mysql_query($sql1);            
				   while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			   	<tr>
			        <td><?php echo $row["S_id"];?></td> 
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			       	<td><?php echo $row['num']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['priceSum']; ?></td>
			        <td><?php echo $row['time']; ?> </td>
			        <td><?php echo $row['D_id']; ?></td>
			    </tr>
				<!-- 用户名查询 -->
			    <?php } ?>
					<?php }else{
						// echo "<script>alert('操作错误');history.go(-1);</script>";
					if(!(empty($text1)) && $select1=="option3"){
						 $sql1="select * from dingdan where username like '%{$text1}%'"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			         { ?>
			    <tr>
			        <td><?php echo $row["S_id"];?></td> 
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			       	<td><?php echo $row['num']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['priceSum']; ?></td>
			        <td><?php echo $row['time']; ?> </td>
			        <td><?php echo $row['D_id']; ?></td>
			    </tr>
			    <!-- 商品名查询 -->
			    <?php } ?>


					<?php }else{

						if(!(empty($text1)) && $select1=="option4"){
						 $sql1="select *  from dingdan where S_name like '%{$text1}%'"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			          { ?>
			    <tr>
			        <td><?php echo $row["S_id"];?></td> 
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			       	<td><?php echo $row['num']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['priceSum']; ?></td>
			        <td><?php echo $row['time']; ?> </td>
			        <td><?php echo $row['D_id']; ?></td>
			    </tr>
			    <?php } ?>	
						<?php }	else{

						if($select1=="option1" && $text1==""){
						 $sql1="select *  from dingdan;"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			          { ?>
			    <tr>
			        <td><?php echo $row["S_id"];?></td> 
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row['S_name']; ?></td>
			        <td><?php echo $row['S_type']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['price']; ?></td>
			       	<td><?php echo $row['num']; ?></td>
			        <td>&yen;&nbsp;<?php echo $row['priceSum']; ?></td>
			        <td><?php echo $row['time']; ?> </td>
			        <td><?php echo $row['D_id']; ?></td>
			    </tr>
			    <?php } ?>
			    			<?php } ?>
			   			 <?php } ?>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			<?php }	?>				
			</table>
		</form>
		</div>
	</div>
</body>
</html>