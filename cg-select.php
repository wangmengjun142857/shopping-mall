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
	<title>超级管理员订单管理</title>
	<link rel="stylesheet" type="text/css" href="p_dc.css">
	<style>
		 .all{
            width:1124px;
            margin:auto;
        }
        .top{
            margin-top: 50px;
        }
        .top li{
            height: 40px;
            list-style: none;
            display: inline-block;
            margin:auto;
            text-align: center;
        }
        .top ul>li:nth-child(1),
        .top ul>li:nth-child(2),.top ul>li:nth-child(3),.top ul>li:nth-child(4),.top ul>li:nth-child(5){
        font-size: 25px;
        }
        a {
            text-decoration: none;
        }
        .center table{
            margin: 30px auto;
            text-align: center; 
        }
	</style>
</head>
<body>
<?php 
 include "conn.php";
 ?>
	<div class="p_dc"> 
		<div class="top">
	        <center><ul class="title">
	            <li><a href="cg_search.php">查看用户信息</a></li>
	            <li><a href="cg_dingdan.php">查询订单</a></li>
	            <li><a href="tjsp.php">添加商品</a></li>
	            <li><a href="modifygoods.php">修改商品</a></li>
	            <li><a href="select.php">查看和删除商品</a></li>
	            <li><a onclick="javascript:if(!confirm('是否退出？')) { return false; }" session.destory(); href="login.php">退出</a></li>
	        </center></ul>
	    </div>
		<div class="p_dc1">
			<span><a href="cg_search.php" style="text-decoration:none">信息管理</a></span>
			<form action="cg-select.php"  method="post">
			<div>
				<select name="select">
					<option value="option1" >全部查看</option>
					<option value="option2">订单Id</option>
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
					<th>用户名称</th>
					<th>商品编号</th>
					<th>商品名称</th>
					<th>商品类型</th>
					<th>商品价格</th>
					<th>购买数量</th>
					<th>总金额</th>
					<th>订单时间</th>
					<th>订单编号</th>
				</tr>
				<!-- 全部查询 -->
				<?php
					if(((empty($_POST['select'])) && empty($_POST['text']))){
	 					$sql1="select S_id,S_name,S_type,price,num,username,priceSum,time,D_id  from dingdan;"; 
	 					$result1=mysql_query($sql1);            
				       while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			     <tr>
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row["S_id"];?></td>
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
		            	
		            $sql1="select * from dingdan where D_id like '%{$text1}%';"; 
			       $result1=mysql_query($sql1);            
				   while ($row=mysql_fetch_assoc($result1))
			         { 
			    ?>
			    <tr>
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row["S_id"];?></td>
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
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row["S_id"];?></td>
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
						 $sql1="select * from dingdan where S_name like '%{$text1}%'"; 
			             $result1=mysql_query($sql1);            
				         while ($row=mysql_fetch_assoc($result1))
			          { ?>
			    <tr>
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row["S_id"];?></td>
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
			        <td><?php echo $row['username']; ?></td>
			        <td><?php echo $row["S_id"];?></td>
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