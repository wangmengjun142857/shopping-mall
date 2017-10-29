<!-- car1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
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
	</style>
</head>
<body>
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
</body>
</html>