<!-- Hupdate.php -->
<?php 
	session_start();
	header("content-type:text/html;charset=utf8");
	
	$pwd = $_POST['pwd'];
	$Rpwd = $_POST['Rpwd'];
	$Rpwd1 = $_POST['Rpwd1'];
	$id = $_SESSION['id'];
	$flag = $_SESSION['flag'];
	// echo $id ;
	// echo "<br>";
	// echo $flag;
	// die();
	// 测试	
	// $pwd = $_POST['pwd'];
	// $Rpwd = $_POST['Rpwd'];
	// $Rpwd1 = $_POST['Rpwd1'];
	// $id = "4";
	// $flag = "1";

	if(isset($_POST['dosubmit'])){
		if((empty($pwd) || empty($Rpwd) || empty($Rpwd1))){
			echo "<script>alert('密码不能为空');</script>";
		}
		if(preg_match('/^[a-zA-Z0-9]\w{5,17}$/',$Rpwd)){
			if($pwd != $Rpwd){
				if($Rpwd == $Rpwd1){
					 if($flag == 2){
						$table = "user";
						$id1 = "U_id";
						$mima1 = "U_pwd";
					}else{
						$table = "admin";
						$id1 = "G_id";
						$mima1 = "G_pwd";
					}

					// if(($flag == 1) && ($flag == 0)){
					// 	$table = "admin";
					// 	$id1 = "G_id";
					// 	$mima1 = "G_pwd";
					// }else{
					// 	$table = "user";
					// 	$id1 = "U_id";
					// 	$mima1 = "U_pwd";
					// }

					include "conn.php";
					// echo $id;
					$sql = "select * from $table where $id1 ='{$id}'";
					$result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
					$mima = md5($pwd); 
					// echo "$mima";
					// echo "###########";
					// echo $row[2];
					// die();
					// f7cc65e0c9b1b0c0822222e970663691 qweqwe
					if($mima == $row[2]){
						$NewPwd = md5($Rpwd);
						$sql1 = "update $table set $mima1 = '{$NewPwd}' where $id1 = '{$id}'";
						mysql_query($sql1);
						 if(mysql_affected_rows()){
						 	if($flag == 0){
						 		echo "<script>alert('修改成功');window.location.href='cg_search.php';</script>";
						 	}
						 	if( $flag == 1){
						 		echo "<script>alert('修改成功');window.location.href='admin.php';</script>";
						 	}
						 	if( $flag == 2){
						 		echo "<script>alert('修改成功');window.location.href='index.php';</script>";
						 	}	
						 }
						 else{
						 	echo "<script>alert('修改失败');window.location.href='update.php';</script>";
						 }
					}else{
						echo "<script>alert('旧密码不正确');window.location.href='update.php';</script>";
					}
				}else{
					echo "<script>alert('两次密码不匹配');window.location.href='update.php';</script>";
				}
			}else{
				echo "<script>alert('新旧密码不能相同');window.location.href='update.php';</script>";
			}	
		}else{
			echo "<script>alert('密码含有非法字符');window.location.href='update.php';</script>";
		}
	}
	
	
 ?>