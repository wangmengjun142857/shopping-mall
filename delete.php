<!-- delete.php -->
<?php 
	session_start();
	// if(isset($_POST['submit'])){
	// 	echo "<script>alert('确认删除');</script>";
	// }else{
	// 	echo "<script>alert('删除');</script>";
	// }
	// echo "111";
	$fid = $_GET['fid'];
	$flag = $_GET['flag'];
	$_SESSION['fid'] = $fid;
	$_SESSION['flag'] = $flag;
	// die();
		echo "<script> var sure=confirm( '确认你的操作吗 '); if (1==sure){window.location.href='delete1.php';} else {window.location.href='cg_search.php';}</script>";
	
	
	
 ?>