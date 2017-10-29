<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>普通管理员后台管理</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="body">
    <div class="top">
                <center><ul class="title">
                    <li><a href="update.php">修改密码</a></li>
                    <li><a href="p_dc.php">查询订单</a></li>
                    <li><a href="p_sc.php">查询商品</a></li>
                    <li><a href="admin.php">查询用户</a></li>
                    
                    <li><a onclick="javascript:if(!confirm('是否退出？')) { return false; }" session.destory(); href="login.php">退出</a></li>
                </center></ul>
    </div>
    <div class="center">
            <div>
                <form action="admin.php" name="myform" id="myform" method="POST">
                    <div><center>
                        <table border="1" cellspacing="0" cellpadding="10" width="700px">
                            <tr>
                                <th>ID</th>
                                <th>用户名</th>
                                <th>身份</th>
                            </tr>
                            <div class="sear">
                            
                                <span>查询用户信息</span>&nbsp;&nbsp;&nbsp;<input type="text" value="" placeholder="输入用户名" name="searname">&nbsp;<input type="submit" value="搜索" name="search">
                            </div>
                            <?php     
                                // error_reporting(0);
                                include "conn.php";
                            if(isset($_POST['search'])){
                                if(!(empty($_POST['searname']))){
                                    $K=$_POST['searname'];
                                    $sql = "select * from user where U_name like '%{$K}%' ";
                                    $result = mysql_query($sql);
                                    $row=@mysql_fetch_row($result);
                                    if(!$row[1]){

                                        echo "<script>alert('用户名不存在');</script>";
                                    }
                                }else{
                                    $sql = "select * from user";
                                    $result = mysql_query($sql);
                                 }
                            }else{
                                $sql = "select * from user";
                                $result = mysql_query($sql);
                            } while($row = @mysql_fetch_row($result)){
                            ?> 
                            <tr>
                                <td >
                                    <input name="ids[]" value="59" type="hidden">
                                        <?php echo $row[0] ?>
                                </td>
                                <td readonly="true"><?php echo $row[1]; ?></td>
                                <td>普通用户</td>
                            </tr>
                            <?php } ?>
                        </table></center>  
                    </div>
                </form>
            </div>
    </div>
</div>
</body>  
</html>