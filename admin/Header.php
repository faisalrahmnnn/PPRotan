<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman Administator</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css"> 
		<script type="text/javascript" src="../assets/js/jquery.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.js"></script> 
		<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>
		<link rel="stylesheet" href="../fontawesome/css/all.css">
		<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" type="text/css" href="Header.css">
		<link rel="icon" href="../images/Rotan.png">
	</head>
	<body style="font-family: mulilight">
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Selamat Datang Administator</a>
				</div>
				<div class="collapse navbar-collapse">				
					<ul class="nav navbar-nav navbar-right">
						<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" ><span class="fa fa-user"></span> Hy, Administator
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="row"></div>
			<div class="col-xs-6 col-md-12">
				<a class="thumbnail">
					<img class="img-responsive" src="../images/Rotan.png">
				</a>
			</div>
			<div class="row"></div>
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="Dashboard.php"><span class="fa fa-home"></span>  Dashboard</a></li>			
				<li><a href="Admin.php"><span class="fa fa-users-cog"></span>  Kelola Admin</a></li>
				<li><a href="Aneka.php"><span  class="fab fa-battle-net"></span>  Kelola Aneka</a></li>
				<li><a href="Artikel.php"><span class="fa fa-newspaper"></span> Kelola Artikel</a></li>
				<li><a href="Album.php"><span class="fab fa-envira"></span> Kelola Album</a></li>
				<li><a href="Galeri.php"><span class="fas fa-images"></span> Kelola Galeri</a></li>
				<li><a href="Tentang.php"><span class="fa fa-user"></span> Kelola Tentang</a></li>
				<li><a href="Pesan.php"><span class="fas fa-mail-bulk"></span>  Kelola Pesan</a></li>
				<li><a href="Logout.php"><span class="fas fa-sign-out-alt"></span>  Keluar</a></li>				
			</ul>
		</div>
		<div class="col-md-10">
		<?php } ?>
