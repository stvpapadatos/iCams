<!DOCTYPE html>
<?php session_start(); 
//<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
session_regenerate_id();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>i-CAMS || Διαχείριση Φορτωτικών</title>
	<link rel="stylesheet" href="css/cbtcargo.css" type="text/css" />
	<style type="text/css">
		body,td,th {
			font-family: "Myriad Pro";}
	</style>
	<script type="text/javascript" src="js/jsfunctions.js"></script>
	<? include_once('classes/connection.php');
	include_once('classes/login.php'); 
	$obj = new loginclass();
	$obj->islogedin = 'no';
	$obj->checkiflogedin();
	?>
</head>
<body onclick="hideelements()">	
	<div class="container" align="center">
		<header>
			<div class="header_image">
	<?			if($obj->islogedin=='yes'):
					$obj->logoutform();
				endif;  ?>
			</div>
		</header>
	
	<article>
	<?	if($obj->islogedin=='yes'):
            include_once('classes/menu.php'); 
		endif;
	
		include_once('classes/controller.php');  
	
		if($obj->islogedin=='no'):
			$obj->loginform();
		endif;
	
			?>
	</article>
	<footer>Copyright 2015 CPD V. 3.11</footer>
	</div>
</body>
</html>