<!-- showgoods.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="menu.css">
	<link rel="styleSheet" type="text/css" href="single.css">
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
			<?php 
				include "conn.php";
				$S_id = $_GET['id'];
				// $S_id = "122";
				$sql = "select * from goods where S_id = '{$S_id}'";
				$result = mysql_query($sql);
				while($row = mysql_fetch_assoc($result)){
			 ?>
			<div class="bodyer">
			<div class="bodyertop clearfix">
				<div class="bodyertop1">
					<div><img src="<?php echo $row['S_add'] ?>" height="401" width="313"/></div>
				</div>
				<div class="bodyetop2">
					<p>REM IPSUM DOLOR SIT AMET</p>
					<p class="top22">
						<span class="p1"><img src="images/block.gif" height="1" width="3"></span>
						<span class="p2" style="color: red;">￥<?php echo $row['price'] ?></span><span class="p3"><s>Rs.999</s></span><span class="p4">click for offer</span>
					</p>
					<a href="insertcar.php?id=<?php echo $row['S_id'] ?>">
						<p class="top23">
							BUY
						</p>
					</a>
					<p class="top24">
						<a href="#">N TO SAVE IN WISHLIST</a>
						<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nemo, doloribus sed illo, repudiandae fugit itaque non cum atque aperiam similique velit enim soluta necessitatibus libero reiciendis quis delectus rem.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quas alias, laudantium omnis minus odit illo perspiciatis exercitationem sapiente nobis, eaque sit eveniet nam repellendus nulla consectetur repellat voluptate accusantium.
						</span>
					</p>
				</div>
				<div class="bodyertop3">
					<div class="bodyertop31">
						
					</div>
					<div class="bodyertop32">
						<div class="span1"></div>
						<div class="span2"></div>
						<div class="span3"></div>
						<div class="span4"></div>
					</div> 
				</div>
			</div>
				<!-- <div class="btop11">
						<img class="img1" src="images/s4.jpg" height="80" width="59"/>
						<img class="two" src="images/s1.jpg" height="80" width="59"/>
						<img src="images/s2.jpg" height="80" width="59"/>
						<img src="images/s3.jpg" height="80" width="59"/>
						<img src="images/s4.jpg" height="80" width="59"/>
				</div> -->
				<div class="wenzi">
					<p class="biaoti">PRODUCT DETAILS</p>
					<p class="neirong">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum necessitatibus placeat, quae fugiat aut eveniet eligendi doloremque officiis distinctio repudiandae accusamus dicta voluptatum. Cum unde minus inventore delectus, facilis voluptatem!eleniti at, porro laboriosam ullam vel accusamus error tempora sit reprehenderit?
					</p>
					<p class="biaoti">MORE INFORMATION
					</p>
					<p class="neirong">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum necessitatibus placeat, quae fugiat aut eveniet eligendi doloremque officiis distinctio repudiandae accusamus dicta voluptatum. Cum unde minus inventore delectus, facilis voluptatem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque illo explicabo quam neque earum, molestias est, ex amet ab deleniti at, porro laboriosam ullam vel accusamus error tempora sit reprehenderit?
					</p>
					<p class="biaoti">PELATED PRODUCTS
					</p>
				</div>
				<div class="bodyer3 clearfix">
					<div class="bodyer31">
						<p><img src="images/pic9.jpg" height="333" width="250">
						</p>
						<p class="b31">parum clari</p>
						<p class="b32">Duis autem veleum irure</p>
						<p class="b33">Rs.<span>399</span></p>
					</div>
					<div class="bodyer32">
						<p><img src="images/pic8.jpg" height="333" width="250">
						</p>
						<p class="b31">parum clari</p>
						<p class="b32">Duis autem veleum irure</p>
						<p class="b33">Rs.<span>399</span></p>
					</div>
					<div class="bodyer31">
						<p><img src="images/pic1.jpg" height="333" width="250">
						</p>
						<p class="b31">parum clari</p>
						<p class="b32">Duis autem veleum irure</p>
						<p class="b33">Rs.<span>399</span></p>
					</div>
					<div class="bodyer32">
						<p><img src="images/pic3.jpg" height="333" width="250">
						</p>
						<p class="b31">parum clari</p>
						<p class="b32">Duis autem veleum irure</p>
						<p class="b33">Rs.<span>399</span></p>
					</div>
				</div>
			</div>
			<?php } ?>
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