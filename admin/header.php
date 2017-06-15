<?php
session_start();
$_SESSION['email'];
$_SESSION['pass'];
if(!$_SESSION['email'] and !$_SESSION['pass']){
	echo "<script>location.href = 'loging.php';</script>";
}
?>
<html>
	<head>
		<title>Admin Welcome</title>
		<link rel="Stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body class="container">
	<!--This is Now Bar Manues -->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">GL Admin</a>
			</div>
			<ul class="nav navbar-nav">
			  <li ><a href="index.php">Home</a></li>
			  <li><a href="clients.php">custormers</a></li>
			  <li><a href="product.php">Product</a></li>
			  <li><a href="cms.php">CMS</a></li>
			</ul>
		  </div>
		</nav>
	<!--This is Now Bar Manues -->