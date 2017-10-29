<!-- select.php -->
<?php 
	session_start();
	$S_id = $_SESSION['id2'];
                        if(empty($S_id)){
                            echo "<script>alert('您还未登录，请登录');window.location.href='login.php';</script>";
                        }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin: 0px;
			padding-top: 0px;
		}
		ul>li{
			list-style: none;
		}
		#div2{
			width: 1120px;
			height: 335px;
			/*border: 1px solid red;*/
			margin-left: 15%;
		}
		div>ul{
			display: inline-block;
		}
		#ul1{
			border: 1px solid red;
			margin-top: 5px;
			/*margin-left:225px ; */
		}
		#ul1>li{
			display: inline-block;
			overflow: hidden;
		}
		#ul1>:nth-child(1){
			width: 250px;
			height: 335px;
			border-right: 1px solid yellow;
			border: 1px solid yellow;
		}
		#ul1>:nth-child(2){
			width: 250px;
			height: 335px;
			border: 1px solid #777777;
		}
		#ul2>li{
			width: 100%;
			height: 40px;
			margin-top: 25px;
			margin-left: -15px;	
			/*border: 1px solid #111111;*/
			line-height: 40px;
			font-size: 18px;
			border-bottom: 1px solid #111111;
		}
		#div1{
			width: 500px;
			height: 40px;
			/*border: 1px solid #111111;*/
			margin: 50px auto;
		}
		#input1{
			width: 300px;
			height: 25px;
		}
		#submit1{
			width: 80px;
			height: 30px;
			font-size: 15px;
			border: none;		}
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
        .top ul>li:nth-child(2),.top ul>li:nth-child(3),.top ul>li:nth-child(4),.top ul>li:nth-child(5),.top ul>li:nth-child(6),.top ul>li:nth-child(6){
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

	<form action="select.php" method="post">
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
		<div id="div1">
			<input type="text" id="input1" name="id">
			<input id="submit1" type="submit">
		</div>
		<?php 
			include "conn.php";
			$id = @$_POST['id'];
			if($id == null){
				$sql = "select * from goods ";
			}else{
				$sql = "select * from goods where S_id like '%{$id}%' ";
			}
			$result = mysql_query($sql);
			// var_dump($result);			
			// echo $id;
		 ?>
		<div id="div2">
			<?php 
				// die();
				while($row = mysql_fetch_assoc($result)){			
			?>
			<ul id="ul1">
				<li><img src="<?php echo $row['S_add']; ?>" alt=""></li>
				<li>
					<ul id="ul2">
						<li><span>商品编号：</span><?php echo $row['S_id']; ?></li>
						<li><span>商品名称：</span><?php echo $row['S_name']; ?></li>
						<li><span>商品类型：</span><?php echo $row['S_type']; ?></li>
						<li><span>商品单价：$</span><?php echo $row['price']; ?></li>
						<li><span>可用操作：</span>&nbsp;&nbsp;<a href="goodsdelete.php?id=<?php echo $row['S_id']; ?>">删除</a></li>
					</ul>
				</li>
			</ul>
			<?php }  ?>
		</div>
	</form>
	<script>
	// alert('lis');
		lis = document.getElementById("div2").children.length;
		// console.log(lis);
		if(lis == 0){
			alert("查无此项");
			window.location.href='select.php';
		}
		if(lis == 1){
			document.getElementById('ul1').style.marginLeft = '225px';
		}else{
			document.getElementById('ul1').style.marginLeft = '0px';
		}
	</script>
</body>
</html>