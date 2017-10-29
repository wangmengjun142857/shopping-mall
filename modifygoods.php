<!-- modifygoods.php -->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>超级管理员修改商品</title>
    <style>
    	caption{
    		font-size:19px;
    		margin-bottom:20px;
    	}
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
        .top ul>li:nth-child(2),.top ul>li:nth-child(3),.top ul>li:nth-child(4),.top ul>li:nth-child(5),.top ul>li:nth-child(6),.top ul>li:nth-child(7){
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
<div class="all">
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
    <form action="modifygoods.php" method="POST">
        <table border="1" cellspacing="0" cellpadding="20" align="center">
            <caption>商品列表</caption>
            <tr>
                <th>商品编号</th>
                <th>商品名称</th>
                <th>商品价格</th>
                <th>商品类型</th>
                <th>商品图片</th>
                <th>操作</th>
            </tr>

            <?php     
                // error_reporting(0);
                include "conn.php";
                $sql = "select * from goods";
                $result = mysql_query($sql);
          		while($row = @mysql_fetch_assoc($result)){
            ?> 

            <tr>
            	<td><?php echo $row['S_id'] ?></td>
            	<td><?php echo $row['S_name'] ?></td>
            	<td><?php echo $row['price'] ?></td>
            	<td><?php echo $row['S_type'] ?></td>
            	<td><img src="<?php echo $row['S_add'] ?>" width="100"></td>
            	<td><a href="modify.php?S_id=<?php echo $row['S_id'] ?>">修改</a></td>
            </tr>
        	<?php } ?>
        </table>  
    </form>
</div>
</body>  
</html>