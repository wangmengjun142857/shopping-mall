<?php 
	// date_default_timezone_set("PRC");
	@session_start();
	$link = mysql_connect("127.0.0.1","root","root") or die("连接失败");

	mysql_select_db("sk",$link);

	mysql_query("set names utf8");

 ?>