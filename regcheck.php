<?php
    session_start();
    include"conn.php";
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "立即注册"){
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $pwd_confrim=$_POST['confirm'];
        if(!(empty($username) || empty($pwd)||empty($pwd_confrim))){
            if(preg_match('/^[A-Za-z0-9]{6,18}$/',$username)){
                if(preg_match('/^[A-Za-z0-9]{6,18}$/',$pwd)){
                    if($pwd===$pwd_confrim){
                        $pwd1=md5($pwd);
                        $sql="insert into user values('','$username','$pwd1',2)";
                        if(mysql_query($sql)){
                            // echo "<script>alert('注册成功');</script>";
                            $sql2 = "select * from user where U_name = '{$username}' and U_pwd = '{$pwd1}'";
                            $row = mysql_fetch_assoc(mysql_query($sql2));
                            $_SESSION['id'] = $row['U_id'];
                            // echo $_SESSION['id'];
                            // die();
                            exit('用户注册成功！进入<a href="index.php">首页</a>');
                        }
                        else{
                            echo "<script>alert('注册失败');history.go(-1);</script>";
                        }
                    }
                    else{
                        echo "<script>alert('密码不一致');history.go(-1);</script>";
                    }
                }
                else{
                     echo "<script>alert('密码必须6-18位之间');history.go(-1);</script>";
                }


            }
            else{
                echo "<script>alert('用户名不合法');history.go(-1);</script>";
            }
        }
        else{    
          echo "<script>alert('用户名与密码不能为空');history.go(-1);</script>";
        }
    }
?>  