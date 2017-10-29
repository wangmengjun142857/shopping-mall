<!-- meun.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<link rel="stylesheet" href="商城/login.css"/>
	<link rel="stylesheet" href="商城/menu.css"/>
	<link rel="stylesheet" href="admin_reg.css"/>
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
						<li>Wishlist</li>
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
						<a href=""><li>&nbsp;HOME&nbsp;</li></a>
						<a href=""><li>&nbsp;SPECIAL&nbsp;</li></a>
						<a href=""><li>&nbsp;MEN FASHION&nbsp;</li></a>
						<a href=""><li>&nbsp;ACCESSORIES&nbsp;</li></a>
						<a href=""><li>&nbsp;WOMWEN'S FASHION&nbsp;</li></a>
						<a href=""><li>&nbsp;BLOG&nbsp;</li></a>
					</ul>
				</div>
			</div>
		</div>
		<!-- 头部分结束 -->	


		<!-- 管理员注册	 -->
				<div class="admin_reg">
					<form action="rigister.php"  method="post">
						<table>
			            <tr>
			            <th></th>
			            <th colspan="2">管理员注册</th>
						  </tr>
						  <tr>
						    <td class="one"><span>*</span>&nbsp;&nbsp;&nbsp;用&nbsp;户&nbsp;名：</td>
						    <td class="three"><input name="username" type="text" placeholder="4-18位"/></td>
						    <td>&nbsp;&nbsp;用户名由数字、字母、下划线组成!</td>
						  </tr>
						  <tr>
						   <td class="one"><span>*</span>&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码：</td>
						    <td class="three"><input type="password" name="password" placeholder="6-18位"/></td>
						    <td>&nbsp;&nbsp;密码由数字、字母、下划线组成!</td>
						  </tr>
						   <tr>
						   <td class="one"><span>*</span>&nbsp;&nbsp;&nbsp;确认&nbsp;密码：</td>
						    <td class="three"><input type="password" name="qrpwd" placeholder="与密码保持一致"/></td>
						    <td>&nbsp;&nbsp;密码由数字、字母、下划线组成!</td>
						  </tr>
						   <tr>
						   <td class="one">管理员权限：</td>
						    <td colspan="2" >
						    	<select name="select">
									<option value="0">超级管理员</option>
									<option value="1" select="selected">普通管理员</option>
						    	</select>
						    </td>
						  </tr>
						   <tr>
						   <td></td>
							   <td colspan="2" class="two">
							   		<input type="submit" name="dosubmit" />&nbsp;&nbsp;
							   		<input type="submit" value="返回" href="<?php echo"<script>history.go(-1);</script>";  ?>"/>
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