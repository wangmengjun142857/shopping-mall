<!-- user_check.php -->
<?php
	Session_start();
	if($_SESSION['Uname']){
		header('location:href=".php"')
	}
	?>
