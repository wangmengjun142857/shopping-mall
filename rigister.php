<!-- rigister.php -->
<?php
	session_start();
	$_SESSION['Uname']=0;
	header("content-type:text/html;charset=utf8");
	$G_name = $_POST['username'];
	$G_pwd = $_POST['password'];
	$G_qrpwd = $_POST['qrpwd'];
	$G_flag = $_POST['select'];
	if(isset($_POST['dosubmit'])){
		if(!(empty($G_name) || empty($G_pwd) || empty($G_qrpwd))){
			if(preg_match('/^[a-zA-Z0-9]\w{3,17}$/',$G_name)){
				if(preg_match('/^[a-zA-Z0-9]\w{5,17}$/',$G_pwd)){
					if ($G_pwd === $G_qrpwd) {
						include "conn.php";
						$G_pwd1 = md5($G_pwd);
						$sql = "insert into admin values('','$G_name','$G_pwd1','$G_flag')";
						// echo $sql;
						// die();
						if(mysql_query($sql)){
							$sql3="select * from admin where G_name='{$G_name}' and G_pwd='{$G_pwd1}'";
							$result1 = mysql_query($sql3);
							$row1 = mysql_fetch_assoc($result1);
							$_SESSION['id']=$row1['G_id'];
							
							$_SESSION['flag']=$row1['G_flag'];
							// echo $_SESSION['id'];
							// echo $_SESSION['flag'];
							echo "<script>alert('注册成功');window.location.href='admin.php';</script>";
						}else{
							echo "<script>alert('注册失败');window.location.href='admin_reg.php';</script>";
						}
						
					}else{
						echo "<script>alert('两次密码不一致');window.location.href='admin_reg.php';</script>";
					}

				}else{
					echo "<script>alert('密码非法或长度不符合');window.location.href='admin_reg.php';</script>";
				}
			
			}else{
				echo "<script>alert('用户名非法');window.location.href='admin_reg.php';</script>";
			}
			
		}else{
			echo "<script>alert('带星号的为必填选项');window.location.href='admin_reg.php';</script>";
		}
		
	}

	
 ?>