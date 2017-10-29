<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品主页</title>
	<link rel="stylesheet" href="商城/menu.css">
	<style>
		table{
			margin: auto;
			text-align: center; 
		}
		th{
			width: 200px;
			height: 30px;
			border: 1px solid #000;
		}
		td{
			width: 200px;
			height: 30px;
			border: 1px solid #000;
		}
		button{
			width: 20px;
		}
		#middle{
			height: 500px;
		}
	</style>
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
		<div id="middle">
			<table id="data">
			<thead>
				<tr>
					<th>商品名称</th>
					<th>单价</th>
					<th>数量</th>
					<th>小计</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody id="div2">
				<?php 
				include "conn.php";
				$S_id = $_SESSION['id'];
				// echo $S_id;
				
				// $S_id = "12";
				$sql =  "select * from car where U_id = '{$S_id}'";
				$result = mysql_query($sql);
				@$i == 0;
				while($row = mysql_fetch_assoc($result)){
					@$i++;
				?>
					<tr>
						<td><?php echo $row['S_name'] ?></td>
						<td>&yen;<?php echo $row['price'] ?></td>
						<td><button type="submit" onclick="change(this)">-</button>
							<span id="span1">1</span>
							<button type="submit" onclick="change(this)">+</button></td>
						<td>&yen;<?php echo $row['price'] ?></td>
						<td>
							<a href="cardelete.php?id=<?php echo $row['S_id'] ?>">删除</a>&nbsp;&nbsp;&nbsp;
							<a onclick="my_a(<?php echo $i?>);" id="pay<?php echo $i?>" href="pay.php?id=<?php echo $row['S_id'] ?>">支付</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5">购物车</td>
				</tr>
			</tfoot>
			</table>
		</div>
<script>
		lis = document.getElementById("div2").children.length;
		// console.log(lis);
		if(lis == 0){
			alert("购物车为空");
			window.location.href='products.php';
		}
		function my_a(n){
            s=document.getElementById("pay"+n).parentNode.previousElementSibling.innerHTML;
			a = s.substring(s.indexOf('￥') + 2, s.length);
			document.cookie="sum="+a;
            }
		document.getElementsByTagName("a").addEventListener('click',function(){
			// var a=document.getElementById("span1").innerText;
			// // var a = 15;
			// document.cookie="sum="+a;
			// var father=document.getElementById("pay").parentNode.previousElementSibling.innerHTML;
			// alert(father);
			// alert("123");
		})
		
		function change(btn){
            // var btn = document.getElementsByTagName("button");
            var td = btn.parentNode;
            var span = td.querySelector("span");
            var n=parseInt(span.innerHTML);
           	n+=btn.innerHTML=="+"?1:n==1?0:-1;
            span.innerHTML=n;

            var price=parseFloat(td.previousElementSibling.innerHTML.slice(1));
            td.nextElementSibling.innerHTML="&yen;"+(price*n).toFixed(2);
            var tds=data.querySelectorAll("tbody>tr>td:nth-child(4)");
            for(var i=0,sum=0;i<tds.length;i++){
            	sum+=parseFloat(tds[i].innerHTML.slice(1));
            }
            data.querySelector("tfoot>tr>td:nth-child(2)").innerHTML="&yen;"+sum.toFixed(2);
        }

	</script>
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