<!-- update.php -->
<?php
	session_start(); 
	$flag = $_SESSION['flag'];
	$id = $_SESSION['id'];
	// echo $id ;
	// echo $_SESSION['flag'];
	// echo $flag;
 ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>修改个人信息</title>
	<link rel="stylesheet" href="商城/login.css"/>
	<link rel="stylesheet" href="商城/menu.css"/>
	<link rel="stylesheet" href="update.css"/>
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
						<li><a href="update.php">Change Pwd</a></li>
						<li id="login"><a href="login.php">Log In</a></li>
						<li id="login"><a href="register_u.html">Sign Up</a></li>
					</ul>
				</div>
			</div>
			<div id="daohang">
				<div id="A1">
					<div><img src="images/logo.png" alt=""></div>
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
						<a href="index.html"><li>&nbsp;HOME&nbsp;</li></a>
						<a href="#"><li>&nbsp;SPECIAL&nbsp;</li></a>
						<a href="products.html"><li>&nbsp;MEN FASHION&nbsp;</li></a>
						<a href="#"><li>&nbsp;ACCESSORIES&nbsp;</li></a>
						<a href="single(2).html"><li>&nbsp;WOMWEN'S FASHION&nbsp;</li></a>
						<a href="blog(2).html"><li>&nbsp;BLOG&nbsp;</li></a>
					</ul>
				</div>
			</div>
		</div>
		<!-- 头部分结束 -->	


		<!-- 修改个人信息-->
				<div class="update">
					<form action="Hupdate.php"  method="post">
						<table>
				          <tr>
					           <th></th>
					          <th colspan="2">修改个人信息</th>
						  </tr>
						  <!-- <tr>
						    <td class="one">&nbsp;&nbsp;用户名：</td>
						    <td colspan="2"><input type="text" disabled/></td>
						  </tr> -->
						  <tr>
						   <td class="one"><span>*</span>&nbsp;&nbsp;原密码：</td>
						    <td class="three"><input type="password" name="pwd" placeholder="6-18位"/></td>
						    <td>&nbsp;&nbsp;密码由数字、字母、下划线组成!</td>
						  </tr>
						   <tr>
						   <td class="one"><span>*</span>&nbsp;&nbsp;新密码：</td>
						    <td class="three"><input type="password" name="Rpwd" placeholder="6-18位"/></td>
						    <td>&nbsp;&nbsp;不能与原密码相同，密码由数字、字母、下划线组成!</td>
						  </tr>
						   <tr>
						   <td class="one"><span>*</span>&nbsp;&nbsp;确认密码：</td>
						    <td class="three"><input type="password" name="Rpwd1" placeholder="与新密码保持一致"/></td>
						    <td>&nbsp;&nbsp;密码由数字、字母、下划线组成!</td>
						  </tr>
						  <!--  <tr>
						   <td class="one">用户身份：</td>
						    <td colspan="2" >
						    	<select disabled>
									<option>超级管理员</option>
									<option>普通管理员</option>
									<option>普通用户</option>
						    	</select>
						    	<input type="text" disabled/>
						    </td>
						  </tr> -->
						   <tr>
						   		<td></td>
							   <td colspan="2" class="two">
							   		<input type="submit" name="dosubmit" value="修改"/>&nbsp;&nbsp;
							   		<input type="submit" value="返回"/>
							   </td>
						  </tr>
						</table>
					</form>
				</div>

		<!-- 尾部分开始 -->
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