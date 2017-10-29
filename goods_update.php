<!-- goods_update.php -->
<?php 
	include "conn.php";
	header("content-type:text/html;charset=utf-8");
	// $db = new MySQLi("localhost","root","root","sk");
	$id = $_POST["id"];
	$name = $_POST["name"];
	$price = $_POST["price"];
	$type = $_POST["type"];
		if(isset($_POST['dosubmit'])) {
			if($_FILES['file']['error'] > 0) {
				// exit("文件上传错误！");
				echo "<script>alert('修改成功！');window.location.href='modifygoods.php'</script>";
			}
			$sql1 = "update goods set S_name='{$name}',price='{$price}',S_type='{$type}' where S_id='{$id}'";
			mysql_query($sql1);
			if(mysql_affected_rows()){
				echo "<script>alert('修改成功！');window.location.href='modifygoods.php'</script>";
			}
			$filename = $_FILES['file']['name'];
			$arr = explode(".",$filename);
			$extName = end($arr);
			$arr = array('png','jpg','gif');
			if(!in_array($extName,$arr)){
				exit("文件不合法！");
			}
			$maxsize = 1024*1024;
			if($_FILES['file']['size'] > $maxsize){
				exit("上传文件不能超过1M");
			}
			if(is_uploaded_file($_FILES['file']['tmp_name'])){
				$src = "images/".time().rand(100,900).".".$extName;
				if(move_uploaded_file($_FILES['file']['tmp_name'], $src)){
					$sql = "update goods set S_name='{$name}',price='{$price}',S_type='{$type}',S_add='{$src}' where S_id='{$id}' ";
					mysql_query($sql);
					// echo $sql;
					// echo "上传成功";
					if(mysql_affected_rows()){
						echo "<script>alert('修改成功！');window.location.href='modifygoods.php'</script>";
					}
				}else{
					echo "上传失败";
				}
			}

		}
	// }

?>
