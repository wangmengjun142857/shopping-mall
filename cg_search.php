<!-- cg_search.php -->
<?php 
    session_start();
    $S_id = $_SESSION['id2'];
                        if(empty($S_id)){
                            echo "<script>alert('您还未登录，请登录');window.location.href='login.php';</script>";
                        }
 ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>超级管理员后台管理</title>
    <link rel="stylesheet" type="text/css" href="商城/cg_search.css"/>
    <style>
    .top li{
        height: 40px;
        list-style: none;
        display: inline-block;
        margin:auto;
        text-align: center;

    }
    .top ul>li:nth-child(1),
    .top ul>li:nth-child(2),.top ul>li:nth-child(3),.top ul>li:nth-child(4),.top ul>li:nth-child(5),.top ul>li:nth-child(6){
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
<div class="container_clearfix">
    <div class="top">
        <center><ul>
            <li><a href="cg_search.php">查看用户信息</a></li>
            <li><a href="cg_dingdan.php">查询订单</a></li>
            <li><a href="tjsp.php">添加商品</a></li>
            <li><a href="modifygoods.php">修改商品</a></li>
            <li><a href="select.php">查看和删除商品</a></li>
            <li><a onclick="javascript:if(!confirm('是否退出？')) { return false; }" session.destory(); href="login.php">退出</a></li>
            <li><a href="admin_reg.php">管理员注册</a></li>
        </center></ul>
    </div>
    <div class="main-wrap">
        <div class="search-wrap">
            <div class="search-content">
               
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select onchange="window.location=this.value;">
                                    <option value="cg_search.php" name="search">查询用户</option>  
                                    <option value="cg-select.php" name="search">查询订单</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr> 
                    </table>
                </form>
            </div>
        </div>
        <!-- 是否删除弹窗 -->
        <div class="result-wrap">
            <form name="myform1" id="myform1" method="post">
                <div class="result-content">
                    <table class="result-tab"  width="100%" border="1" cellspacing="0" cellpadding="0" 
                    style="text-align: center;height: 50px">
                    	<tr>
							<td colspan="4" style="text-align: center;font-size: 20px;">用户信息</td>
                    	</tr>
                        <tr>
                            <td width="90px">ID</td>
                            <td width="90px">用户名</td>
                            <td width="150px">角色</td>
                            <td width="90px">操作</td>
                        </tr>
                       <?php 
                          include "conn.php";

                          $page= isset($_GET['page']) ? $_GET['page'] : 1 ;
                          $pagesize=5; //改变当前页可存放记录数  
                          $start=$pagesize*($page-1);
                          $sql1="select * from user where U_id='{}'";
                          $result1=mysql_query($sql1);
                          $totalPage=mysql_num_rows($result1);//用到result
                          $pageNum=ceil($totalPage/$pagesize)-1;
                          $sql="select * from user limit $start,$pagesize";
                          $result=mysql_query($sql);

							while ($row=mysql_fetch_assoc($result))
                          {
                       ?>
                        <tr>
                            <td width="90px"><?php echo $row['U_id']; ?></td>
                            <td width="90px" title=""><?php echo $row['U_name']; ?> 
                            </td>
                            
                            <td width="90px"><?php 
                            	if($row['G_flag']==2)
                            	echo "普通用户"; 
                            ?></td>
                            <td>
                                <!-- <a class="link-update" href="#">修改</a> -->
                                <a   href="delete.php?fid=<?php echo $row['U_id'] ?>&flag=<?php echo $row["G_flag"] ?>">删除</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>  
					<!-- 加分页的位置 -->
            </form>
        </div>
        <div class="result-wrap">
            <form name="myform2" id="myform2"  method="post">
                <div class="result-content">
                    <table class="result-tab2" width="100%" border="1" cellspacing="0" cellpadding="0">
                    	<tr>
							<td colspan="4" style="text-align: center;font-size: 20px;">管理员信息</td>
                    	</tr>
                        <tr>
                            <td width="90px">ID</td>
                            <td width="90px">用户名</td>
                            <td width="150px">角色</td>
                            <td width="90px">操作</td>
                        </tr>
                        <?php 
                          include "conn.php";
                          $sql2="select * from admin";
                          $result2=mysql_query($sql2);
							while ($row=mysql_fetch_assoc($result2))
                          { 
                          	$_SESSION['id'] = $row['G_id'];
                        ?>
                        <tr>
                            <td width="90px"><?php echo $row['G_id']; ?></td>
                            <td width="90px" title=""><?php echo $row['G_name']; ?>                            </td>
                            <td width="150px"><?php 
                            	if($row['G_flag']==1)
                            	echo "普通管理员"; 
                            	else echo "<a style='color:red'>超级管理员</a>";
                            ?></td>
                            <td>
                                <!-- <a class="link-update" href="">修改</a> -->
                                <!-- <button id="btn1" name="button1" onclick="btn123();return false;" href="">删除</button> -->
                                <!-- <a id="btn1" name="button1" onclick="btn123();" href="">删除</a> -->
                                <a   href="delete.php?fid=<?php echo $row["G_id"] ?>&flag=<?php echo $row["G_flag"] ?>">删除</a>
                            </td>
                        </tr>
                       <!--  <div id="div1">
        						是否删除？
							<button id="bt1" onclick="btn321();" href="ceshi1.php?id=<?php echo $row["G_id"] ?>">是</button>
							<button id="bt2" onclick="btn321();" href="#">否</button>
						</div> -->
                        <?php 

                        	} 
                        ?>
                    </table>
                </div>
            </form>
        </div>
        
    </div>
    <!--/main-->
</div>

<script language="javascript">

    function ch1() {

        if (confirm("您确定要删除吗?")) {

            window.location = "delete.php?id=<?php echo $row["G_id"] ?>";

            return true;

        } else {

            return false;

        }

    }

</script>
</body>
</html>
   
