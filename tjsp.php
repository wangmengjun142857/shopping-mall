<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>超级管理员添加商品</title>
	<link rel="stylesheet" href="商城/menu.css">
	<link rel="stylesheet" href="添加商品.css">
	<style>
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
        .top ul>li:nth-child(2),.top ul>li:nth-child(3),.top ul>li:nth-child(4),.top ul>li:nth-child(5),.top ul>li:nth-child(6){
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
	<div id="zhu">
		<div id="all">
			<div class="tj">
				<form action="tjspyz.php" method="post" enctype="multipart/form-data">
					*商品编号:<input type="text" name="S_id" placeholder="请输入商品编号，6-18位"/> <br>
					*商品名称:<input type="text" name="S_name" placeholder="请输入商品名称，必须纯中文"/> <br>
					*商品类型:&nbsp;
						<select  id="" name="products[]" class="select_type">
						<?php
							include "conn.php";
							$sql="select S_type from goods order by S_type desc";
							$conn=mysql_query($sql);
							while($rs=mysql_fetch_array($conn)){  
						?>
						<option value<?php echo $rs["S_type"]?>"><?php echo $rs["S_type"]?></option>
						<?php 
						 }
						 ?>
						</select>
					<br>
					*商品价格:<input type="text" name="price" placeholder="请输入商品价格"/> <br>
					 *商品样图:&nbsp;&nbsp;<input type="file" name="upfile" placeholder=""/> <br>
					<!-- <img src="images/<?php echo $fname ?>" alt=""> -->
					<input type="Submit" name="Submit" value="提交" />
				</form>
			</div>
	</div>
</body>
</html>


