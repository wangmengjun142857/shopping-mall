<!-- index.php -->
<?php
	// Session_id('$sessionid');//注意这个时候session_id()这个函数是带有参数的 
	// echo $sessionid;
	Session_start();//这个函数必须在session_id()之后 
	// echo $_SESSION['uname']; // 
	// echo $_SESSION['upwd'];   // 
	// echo date('Y m d H:i:s', $_SESSION['time']);
	// echo '<br /><a href="login.php">返回登录页面</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品主页</title>
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
						<!-- <li>Account</li> -->
						<li id="login"><a href="update.php">Change Pwd</a></li> 　　
						<li id="login"><a href="login.php" class="login">Log In</a></li>
						<li id="login"><a href="register_u.html" class="login">Register</a></li>
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
						<a href="#"><li>&nbsp;HOME&nbsp;</li></a>
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
		<div class="middle">
		<!-- index上半部分 -->
		<div class="sale">
			<img src="商城/images/2.jpg"  width="909px" height="254px">
			<img src="商城/images/3.jpg" class="sale-right" width="909px" height="254px">
		</div>

		<div class="introduce">
			<div class="reward"><span class="int int1"></span><div class="cont">Upto 5% Reward on your shipping</div></div>
			<div class="returned"><span class=" int int2"></span><div class="cont">Easy Extended Returned</div></div>
			<div class="shipping"><span class="int int3"></span><div class="cont">Free Shipping on order over 99$</div></div>
			<div class="schedule"><span class="int int4"></span><div class="cont">Delivery Schedule Spread Cheer Time</div></div>
		</div>
		
		<!-- 文字部分 -->
		<div class="word">
			<div class="word-title">1 OF THE MOST BEAUTIFUL ONLINE STORE </div>
			<div class="word-content">Clothes is one of the world's leading E-commerce companies that designs and develops online stores</div>
		</div>

		<!-- best sellers部分 -->
		<div class="sellers">
			<span></span>　
			Best Sellers
		</div>
		<div class="detailed">
			<div class="pic div1">
				<img src="images/p1.jpg" width="204px" height="164px">
				<p class="ull">Ullamcorper suscipit</p>
				<p class="price">178.90$</p>
				<div class="pic-btm">
					<div class="btm-left">
						<span class="basket"></span>
						<span class="btm-word">Add to Cart</span>
					</div>
					<div class="btm-right">
						<span class="more"></span>
						<span class="btm-word">See More</span>
					</div>
				</div>
				<span class="heart"></span>
				<span class="star"></span>
			</div>
			<div class="pic div2">
				<img src="images/p2.jpg" width="204px" height="164px">
				<p class="ull">Ullamcorper suscipit</p>
				<p class="price">178.90$</p>
				<div class="pic-btm">
					<div class="btm-left">
						<span class="basket"></span>
						<span class="btm-word">Add to Cart</span>
					</div>
					<div class="btm-right">
						<span class="more"></span>
						<span class="btm-word">See More</span>
					</div>
				</div>
				<span class="heart"></span>
				<span class="star"></span>
			</div>
			<div class="pic div3">
				<img src="images/p3.jpg" width="204px" height="164px">
				<p class="ull">Ullamcorper suscipit</p>
				<p class="price">178.90$</p>
				<div class="pic-btm">
					<div class="btm-left">
						<span class="basket"></span>
						<span class="btm-word">Add to Cart</span>
					</div>
					<div class="btm-right">
						<span class="more"></span>
						<span class="btm-word">See More</span>
					</div>
				</div>
				<span class="heart"></span>
				<span class="star"></span>
			</div>
			<div class="pic div4">
				<img src="images/p4.jpg" width="204px" height="164px">
				<p class="ull">Ullamcorper suscipit</p>
				<p class="price">178.90$</p>
				<div class="pic-btm">
					<div class="btm-left">
						<span class="basket"></span>
						<span class="btm-word">Add to Cart</span>
					</div>
					<div class="btm-right">
						<span class="more"></span>
						<span class="btm-word">See More</span>
					</div>
				</div>
				<span class="heart"></span>
				<span class="star"></span>
			</div>
		</div>
		<br><hr>
		<!-- promotion部分 -->
		<div class="prom">
			<span class="tit-pic"></span>
			<span class="pro-tit">Promotion</span>
			<div class="prom-deta">
				<span class="prom-left"></span>
				<span class="prom-right"></span>
				<span class="prom-deta1 prom-deta-pub">
					<img src="images/n1.jpg" width="158px" height="190px">
					<span class="prom-cont">
						<span class="prom-word">
							Contrary to popular
						</span>
						<span class="prom-price">
							589.90$
						</span>
					</span>
					<span class="prom-cart">
						<img src="images/cart1.png" width="34px" height="34px">
						<span class="prom-cart-add">Add to Cart</span>
					</span>
					<span class="prom-top"></span>
				</span>
				<span class="prom-deta2 prom-deta-pub">
					<img src="images/n2.jpg" width="158px" height="190px">
					<span class="prom-cont">
						<span class="prom-word">
							Contrary to popular
						</span>
						<span class="prom-price">
							589.90$
						</span>
					</span>
					<span class="prom-cart">
						<img src="images/cart1.png" width="34px" height="34px">
						<span class="prom-cart-add">Add to Cart</span>
					</span>
					<span class="prom-top"></span>
				</span>
				<span class="prom-deta3 prom-deta-pub">
					<img src="images/n3.jpg" width="158px" height="190px">
					<span class="prom-cont">
						<span class="prom-word">
							Contrary to popular
						</span>
						<span class="prom-price">
							589.90$
						</span>
					</span>
					<span class="prom-cart">
						<img src="images/cart1.png" width="34px" height="34px">
						<span class="prom-cart-add">Add to Cart</span>
					</span>
					<span class="prom-top"></span>
				</span>
				<span class="prom-deta4 prom-deta-pub">
					<img src="images/n4.jpg" width="158px" height="190px">
					<span class="prom-cont">
						<span class="prom-word">
							Contrary to popular
						</span>
						<span class="prom-price">
							589.90$
						</span>
					</span>
					<span class="prom-cart">
						<img src="images/cart1.png" width="34px" height="34px">
						<span class="prom-cart-add">Add to Cart</span>
					</span>
					<span class="prom-top"></span>
				</span>
				<span class="prom-deta5 prom-deta-pub">
					<img src="images/n5.jpg" width="158px" height="190px">
					<span class="prom-cont">
						<span class="prom-word">
							Contrary to popular
						</span>
						<span class="prom-price">
							589.90$
						</span>
					</span>
					<span class="prom-cart">
						<img src="images/cart1.png" width="34px" height="34px">
						<span class="prom-cart-add">Add to Cart</span>
					</span>
					<span class="prom-top"></span>
				</span>
				
			</div>
		</div>

	</div>
	<div id="zhong">
		<div id="zhong_1">
			<div id="zhong_1_l">
				<div  id="zhong_1_l1"><div class="we"></div><div id="span1">But I Must esplan</div></div>
				<div id="but">
					<div id="bt1">
						<div id="touming">
							<ul>
								<li class="top3"><h1>09</h1><p>DAYS</p></li>
								<li class="top3" id="top3_2"><h1>23</h1><p>HOURS</p></li>
								<li class="top3" id="top3_3"><h1>05</h1><p>MINUTES</p></li>
								<li id="bot1"><h1>52</h1><p>SEONDES</p></li>
							</ul>
						</div>
					</div>
					<div id="bt2"><div id="money"><h2>Totam Rem Apreiam</h2><p>$140.00&nbsp;<b style="font-size: 22px;color:orange;">$120.00</b></p></div></div>
					<div id="bt3">
						<div id="bt3_l"><img src="images/cart2.png" alt=""></div>
						<div id="bt3_r"><h2>By This Deal</h2></div>
					</div>
				</div>
			</div>
			<div id="zhong_1_r">
				<div  id="zhong_1_r1"><div id="we" class="we"></div><div id="span1">But I Must esplan</div></div>
				<div class="fu">
					<div><img src="images/t4.jpg" alt=""></div>
					<div><b style="font-size: 22px;">lesdhfoeifhuhdjhfehuhjdsfkj</b><br>
					hfjhdjkfhuiefjhdkfjheufhjdbnbvhajbjdfjkhskfjhfhdkjfhfsifhefhihkfshkjdhfi ihfufdi hfyhkdhfi dhfuihfkjydiufhkji</div>
					<div></div>
				</div>
				<div class="fu">
					<div><img src="images/t5.jpg" alt=""></div>
					<div><b style="font-size: 22px;">lesdhfoeifhuhdjhfehuhjdsfkj</b><br>
					hfjhdjkfhuiefjhdkfjheufhhjkhukjsdhf jdbnbvhajbjdfjkhskfjhfhdkjfhfsifhefhihkfshkjdhfi ihfufdi hfyhkdhfi dhfuihfkjydiufhkji</div>
					<div></div>
				</div>
				<div class="fu">
					<div><img src="images/t6.jpg" alt=""></div>
					<div><b style="font-size: 22px;">lesdhfoeifhuhdjhfehuhjdsfkj</b><br>
					hfjhdjkfhuiefjhdkfjheufhjdbnbvhajbjdfjkhskfjhfhdkjfhfsifhefhihkfshkjdhfi ihfufdi hfyhkdhfi dhfuihfkjydiufhkji</div>
					<div></div>
				</div>
				<div class="fu">
					<div><img src="images/t7.jpg" alt=""></div>
					<div><b style="font-size: 22px;">lesdhfoeifhuhdjhfehuhjdsfkj</b><br>
					hfjhdjkfhuiefjhdkfjheufhjdbnbvhajbjdfjkhskfjhfhdkjfhfsifhefhihkfshkjdhfi ihfufdi hfyhkdhfi dhfuihfkjydiufhkji</div>
					<div></div>
				</div>
			</div>
		</div>
		<div id="zhong_2">
			<div class="zhong_4">
				<div class="zhong_4_1">
					<div id="tu1"></div>
					<div>mazim pla</div>
				</div>
				<div class="zhong_4_2">
					<img src="images/t8.jpg" style="width:205px;" alt="">
				</div>
			</div>
			<div class="zhong_4">
				<div class="zhong_4_1">
					<div id="tu2"></div>
					<div>About Us</div>
				</div>
				<div class="zhong_4_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ullam hic incidunt non corrupti maiores numquam repudiandae.</div>
			</div>
			<div class="zhong_4">
				<div class="zhong_4_1">
					<div id="tu3"></div>
					<div>Contact Us</div>
				</div>
				<div class="zhong_4_2">
					<ul id="ulzhong">
						<li id="first_li"></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
			<div class="zhong_4">
				<div class="zhong_4_1">
					<div id="tu4"></div>
					<div>Contact Us</div>
				</div>
				<div class="zhong_4_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nesciunt nostrum veniam voluptates consequatur, quam explicabo reprehenderit sit animi impedit possimus eveniet ullam .</div>
			</div>
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