<!-- login_submit.php -->
<?php 
    include "conn.php";
    header("content_type:text/html;charset=utf8");
    if(isset($_SESSION['login'])&& $_SESSION['login']===1){
     echo "你已经登录成功！";
     echo "<script> settimeout(\"Location.href='index.php'\",3000);</script>";
     exit;
    }
    else
    if(isset($_POST['dosubmit'])){
        $username =$_POST['username'];
        $pwd2 =md5($_POST['pwd']);
        if((empty($username)||empty($pwd2))){
            echo "<script>alert('用户名和密码不能为空');;window.location.href='login.php';</script>";
        }
        else{
            $sql2 = "select * from user where U_name = '{$username}' AND U_pwd = '{$pwd2}'";
            $sql1= "select * from admin where G_name = '{$username}' AND G_pwd = '{$pwd2}' AND G_flag=1";
             $sql0= "select * from admin where G_name = '{$username}' AND G_pwd = '{$pwd2}' AND G_flag=0";
            if ($_POST['select']==2) {
            	$row=mysql_fetch_assoc(mysql_query($sql2));
                if($row) {
                	$_SESSION['id'] = $row['U_id'];
                    $_SESSION['flag']=$row['G_flag'];
                    $_SESSION['uname']=$row['U_name'];
                    echo "<script>alert('登录成功');window.location.href='index.php';</script>";
                }
                else {
                echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                
                }
            }
            elseif($_POST['select']==1){
            	$row=mysql_fetch_assoc(mysql_query($sql1));
            	if($row) {
            			$_SESSION['id'] = $row['G_id'];
                        $_SESSION['flag']=$row['G_flag'];
                        $_SESSION['uname']=$row['G_name'];
                        	echo "<script>alert('登录成功');window.location.href='admin.php';</script>";   
            	} 
                 else {
                echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                
                }
            }
            elseif($_POST['select']==0){
                $row=mysql_fetch_assoc(mysql_query($sql0));
                if($row) {
                        $_SESSION['id'] = $row['G_id'];
                        $_SESSION['id2'] = $row['G_id'];
                        $_SESSION['flag']=$row['G_flag'];
                        $_SESSION['uname']=$row['G_name'];
                            echo "<script>alert('登录成功');window.location.href='cg_search.php';</script>";   
                } 
                 else {
                echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                
                }
            }
            else {
            	echo "<script>alert('登录失败');window.location.href='login.php';</script>";
            	
            }

        }               
    }           
 ?>