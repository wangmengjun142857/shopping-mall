<!-- index.php -->
<?php
	// Session_id('$sessionid');//注意这个时候session_id()这个函数是带有参数的 
	// echo $sessionid;
	session_start();//这个函数必须在session_id()之后 
	// echo $_SESSION['uname']; // 
	// echo $_SESSION['upwd'];   // 
	// echo date('Y m d H:i:s', $_SESSION['time']);
	// echo '<br /><a href="login.php">返回登录页面</a>';
	// $U_name='7';
	$U_name= $_SESSION['id'];
	// echo $_SESSION['id'];
	$name=$_SESSION['uname'];
	// echo "111";
	
	header("content-type:text/html;charset=utf8"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户个人订单查询</title>
	<link rel="stylesheet" href="商城/menu.css">
	<link rel="stylesheet" href="商城/index.css">
	<link rel="stylesheet" href="商城/index2.css">
</head>
<body>
	<div id="zhu">
		<div id="top">
			<div id="top_1">
				<div>
					<select name=""  class="select" id="select1">
						<option value="">DOLLAR</option>
						<option value="">DOLLAR</option>
						<option value="">DOLLAR</option>
					</select>
					<select name="" class="select" id="select2">
						<option value="">ENGLISH</option>
						<option value="">ENGLISH</option>
						<option value="">ENGLISH</option>	
					</select>
				</div>
				<div>
					<ul>
						<li>Account</li>
						<li id="login"><a href="update.php">Change Pwd</a></li>
						<li id="login"><a href="login.php" class="login">Log In</a></li>
						<li id="login"><a href="register_u.html" class="login">Rigister</a></li>
					</ul>
				</div>
			</div>
			<div id="daohang">
				<div id="A1">
					<div><img src="商城/images/logo.png" alt="未加载"></div>
					<div>
						<div id="bg" class="bg1"></div>
						<div id="bg1" class="bg1">Justo 24/h</div>
					</div>
					<div>
						<div id="A1_1">
							<div><input type="text" id="search" 	placeholder="  Your email address"></div>
							<div id="img"></div>
						</div>
						<div id="A1_2">
							<div></div>
							<div>205.00$</div>
						</div>
					</div>
				</div>
				<div id="B2">
					<ul>
						<a href="index.php"><li>&nbsp;HOME&nbsp;</li></a>
						<a href="#"><li>&nbsp;SPECIAL&nbsp;</li></a>
						<a href="products.php"><li>&nbsp;MEN FASHION&nbsp;</li></a>
						<a href="car.php"><li>&nbsp;SHOPPING CAR&nbsp;</li></a>
						<a href="#"><li>&nbsp;WOMWEN'S FASHION&nbsp;</li></a>
						<a href="#"><li>&nbsp;BLOG&nbsp;</li></a>
						<a href="order.php"><li>&nbsp;ORDER&nbsp;</li></a>
					</ul>
				</div>
			</div>
		</div>
		<div class="middle" style="height: 450px">
		<!-- index上半部分 -->
		<div>
			 <table class="result-tab" width="100%" style="text-align:center " border="1" cellpadding="0" cellspacing="0">
                    	<tr>
							<td colspan="9" style="text-align: center;font-size: 20px;height: 80px">我的订单</td>
                    	</tr>
                        <tr style="height: 50px">
                            <td width="70px">用户名</td>
                            <td width="70px">商品编号</td>
                            <td width="70px">商品名</td>
                            <td width="70px">商品类型</td>
                            <td width="70px">商品单价</td>
							<th>购买数量</th>
                            <td width="70px">商品总价</td>
                            <td width="70px">下单时间</td>
                            <td width="70px">订单编号</td>
                        </tr>


                        <!-- 链接数据库 -->
                        <?php 
                          include "conn.php";

                          $page= isset($_GET['page']) ? $_GET['page'] : 1 ;
                          $pagesize=5; //改变当前页可存放记录数  
                          $start=$pagesize*($page-1);
                          // $ne="select U_name from user where U_id='40'";
                          $sql1="select * from dingdan where username='{$U_name}'";
                          $result1=mysql_query($sql1);
                          $totalPage=mysql_num_rows($result1);//用到result
                          $pageNum=ceil($totalPage/$pagesize)-1;
                          $sql="select * from dingdan where username='{$U_name}' limit $start,$pagesize";
                          $result=mysql_query($sql);

							while ($row=mysql_fetch_assoc($result))
                          {
                       ?>
                         <tr style="height: 50px">
                            <td width="50px"><?php echo $name; ?></td>
                            <td width="50px"><?php echo $row['S_id']; ?></td>
                            <td width="50px"><?php echo $row['S_name']; ?></td>
                            <td width="50px"><?php echo $row['S_type']; ?></td>
                            <td width="50px">&yen;<?php echo $row['price']; ?></td>
                            <td width="50px"><?php echo $row['num']; ?></td>
                            <td width="50px">&yen;<?php echo $row['priceSum']; ?></td>
                            <td width="50px"><?php echo $row['time']; ?> </td>
                            <td width="50px"><?php echo $row['D_id']; ?></td>
                        </tr>
                         <?php } ?>
              </table>
		</div>
			<div class="list-page" style="text-align: center;margin-top: 20px"  >
                        <a href="?page=1">首页</a>
                        <a href="?page=1">前五页</a>
                        <?php 
                            if($page != 1){
                                
                        ?> 
                            <a href="?page=<?php echo $page-1?>">上一页</a>
                        
                         <?php 
                             }
                         ?>
                         <?php 
                            // $showpage = 4;
                            for($i = $page-4; $i< $page ; $i++){
                                if($i <= 0){
                                    $i = 0;
                                }else{  
                         ?>        
                                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php 
                                }
                            }
                         ?>
                         <a class="current" href="?page=<?php echo $page;?>"><?php echo $page;?></a>
                         <?php 
                            $k = $page+ 5;

                            $flag=1;
                            for($i = $page + 1; $i<= $k; $i++){
                                if($page +5 >= $pageNum  ){
                                    $k = $pageNum;
                                }
                                if($page == $pageNum){
                                    continue;
                                }
                         ?>        
                                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php 
                           
                                }
 
                         ?>
                         <?php 
                            if($page != $pageNum){
                                
                        ?> 
                        <a href="?page=<?php echo $page+1?>">下一页</a>
                        <?php 
                           }
                        ?> 
                        <a href="?page=1">后五页</a>
                        <a href="?page=<?php echo $pageNum-1?>">尾页</a>
                </div>			
		

	</div>
		<div id="bottom">
			<div id="bottom_1"><img src="images/pay.png" alt=""></div>
			<div id="bottom_2">
				<ul>
					<li>Home</li>
					<li>Blog</li>
					<li>Shop</li>
					<li>Media</li>
					<li>Features</li>
					<li>About Us</li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div id="bottom_3">
				Copyright&copy;2015Company name All right reserved More Templates
				&nbsp;&nbsp;&nbsp;&nbsp;-Collect from
			</div>
		</div>
	</div>
</body>
</html>