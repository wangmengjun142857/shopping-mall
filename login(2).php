<?php 
    include "conn.php";
    //得到sessionid 
//将session下发给客户端 
    header("content_type:text/html;charset=utf8");
    if(isset($_SESSION['login'])&& $_SESSION['login']===1){
     echo "你已经登录成功！";
     echo "<script> settimeout(\"Location.href='index.php'\",3000);</script>";
     exit;
    }
    else
    if(isset($_POST['dosubmit'])){
        $username =$_POST['username'];
        $pwd =$_POST['pwd'];
        // echo $username;
        // echo $pwd;
        // echo md5("123456");
        if((empty($username)||empty($pwd))){
            echo "<script>alert('用户名和密码不能为空');;window.location.href='login.php';</script>";

        }
        else{
            $check="select G_flag from user where U_name='{$username}'union select G_flag from  admin where G_name='{$username}' ";
            $result=mysql_query($check);
            $row=mysql_fetch_array($result);
            // echo $result;
            $flag=$row['G_flag'];
            // var_dump($flag);
            if($flag=='2'){
                $sql = "select * from user where U_name = '{$username}' limit 1";
            }
            else{
                $sql = "select * from admin where G_name = '{$username}' limit 1";
            }
                $result = mysql_query($sql);
                $row = @mysql_fetch_array($result);
                // var_dump($result);
                if(!($row)) {
                    echo "<script>alert('用户名不存在');window.location.href='login.php';</script>";
                }
                else{
                    if($flag=='2'){
                        $pwd2 = md5($pwd);
                        $sql = "select * from user where U_name = '{$username}' AND U_pwd = '{$pwd2}'";
                        echo $sql;
                        $result1 = mysql_query($sql);
                        $row = mysql_fetch_array($result1);
                        // echo $row['U_name'];
                        // $sessionId = session_id();
                        $_SESSION['id'] = $row['U_id'];
                        // echo "<br>";
                        // echo $_SESSION['id'];
                        // echo "<br>";
                        // echo $result1;
                        // echo "<br>";
                        // echo $row;
                        // die();
                        $_SESSION['flag']=$flag;
                        // $_SESSION['uname']=$username;
                        // $_SESSION['upwd']=$pwd;
                        // $_SESSION['time']=time();
                        // echo ""
                        // die();
                        if(empty($row)){
                            echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                        }else{
                            echo "<script>alert('登录成功');window.location.href='index.php';</script>";
                        }
                        
                        // echo "<script language=\"javascript\">location.href='index.php';</script>";
                        // header('location: index.php'); 
                        // echo $row['U_name'];  
                        // echo "已登录"; 
                }
                elseif($flag=='1'){
                        $pwd2 = md5($pwd);
                        $sql = "select * from admin where G_name = '{$username}' AND G_pwd = '{$pwd2}'";
                        $result2 = mysql_query($sql);
                        $row = mysql_fetch_array($result2);
                        // header('location: gl.php');
                        // $sessionId = session_id();
                        $_SESSION['id'] = $row['G_id'];
                        $_SESSION['flag']=$flag;
                        // echo $_SESSION['flag'];
                        // die();
                        // $_SESSION['upwd']=$pwd;
                        // $_SESSION['time']=time();
                        if(empty($row)){
                            echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                        }else{
                            echo "<script>alert('登录成功');window.location.href='admin.php';</script>";
                        }
                       
                }
                else{
                        $pwd2 = md5($pwd);
                        $sql = "select * from admin where G_name = '{$username}' AND G_pwd = '{$pwd2}'";
                        $result3 = mysql_query($sql);
                        $row = mysql_fetch_array($result3);
                        // header('location: index.php');
                        // $sessionId = session_id();
                        $_SESSION['id'] = $row['G_id'];
                        $_SESSION['flag']=$flag;
                        // $_SESSION['uname']=$username;
                        // $_SESSION['upwd']=$pwd;
                        // $_SESSION['time']=time();
                        if(empty($row)){
                            echo "<script>alert('登录失败');window.location.href='login.php';</script>";
                        }else{
                            echo "<script>alert('登录成功');window.location.href='cg_search.php';</script>";
                        }
                }
        }   }               
    }           
 ?>