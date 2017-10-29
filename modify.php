<!-- modify.php -->
<?php 
	// error_reporting( E_ALL&~E_NOTICE );
	include "conn.php";
	$id = $_GET['S_id'];

	$sql = "select * from goods where S_id='{$id}' ";
	$result = mysql_query($sql);
	$row = @mysql_fetch_assoc($result);
	// print_r($row);
	// echo $row['S_id'];
	// $row = @mysql_fetch_row($result);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		h1{
 			text-align: center;
 		}
 		input{
 			margin: 10px;
 		}
 		button{
 			margin-top: 20px;
 		}
 	</style>
 </head>
 <body>
 	<form action="goods_update.php" align="center" method="post" enctype="multipart/form-data">
 		商品编号：<input type="text" value="<?php echo $row['S_id'] ?>" name="id" readonly><br>
 		商品名称：<input type="text" value="<?php echo $row['S_name'] ?>" name="name" ><br>
		商品类型：<input type="text" value="<?php echo $row['S_type'] ?>" name="type"><br>
 		商品价格：<input type="text" value="<?php echo $row['price'] ?>" name="price"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		商品图片：<input type="file" name="file"><br>
		<button type="submit" name="dosubmit">确认修改</button>
 	</form>

 	<?php 
 		// $name = $_GET['S_name'];
 		// eho $name;
 	 ?>

 </body>
 </html>