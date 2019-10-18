<!DOCTYPE html>
<html>
	<head lang="es">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        
        <meta name="author" content="Kevin Ramírez">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="webmaster" content="Kevin Ramírez">

        <link rel="shortcut icon" href="images/favicon.ico">
		<title>Congreso Internacional Minero Sinaloa</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../bower_components/materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="../bower_components/materialize/fonts/roboto/fonts.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../bower_components/font-awesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="../css/site.css">
		<link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<header>
			<div class="header">
				<div class="container o-h">
					<div class="sec center-flex">
						<div class="img">
							<img src="../images/logo-cims.png" alt="logo cims">
						</div>
					</div>
					<div class="sec center-flex">
						<div class="img">
							<img src="../images/logo-ds.png" alt="logo cims">
						</div>
					</div>
				</div>
			</div>
			<div class="menu-bar">
				<div class="container">
					<?php 
						if ($ingles) {
					?>
					<div class="menu">
						<ul class="margin-none">
							<li class="center-flex"><a href="index.php">Home</a></li>
							<li class="center-flex"><a href="nosotros.php">About us</a></li>
							<li class="center-flex">
								<a href="">Partners</a>
								<ul class="submenu">
									<li class="center-flex"><a href="beneficios.php">Benefits</a></li>
								</ul>
							</li>
							<li class="center-flex">
								<a href="">Statutes and Regulations</a>
								<ul class="submenu">
									<li class="center-flex"><a href="reglamentos.php">Fee</a></li>
								</ul>
							</li>
							<li class="center-flex relative">
								<a href="">International Mining Congress</a>
								<ul class="submenu">
									<li class="center-flex"><a href="stands.php">Stands</a></li>
									<li class="center-flex"><a href="conferencias.php">Conferences</a></li>
									<li class="center-flex"><a href="reglamentos.php">Fee</a></li>
									<li class="center-flex"><a href="formulario.php">Reservations</a></li>
									<li class="center-flex"><a href="hospedaje.php">Lodging</a></li>
								</ul>
							</li>
							<li class="center-flex">
								<a href="">News</a>
								<ul class="submenu">
									<li class="center-flex"><a href="noticias.php">Gallery</a></li>
								</ul>
							</li>
							<li class="center-flex"><a href="contacto.php">Contact</a></li>
						</ul>
					</div>
					<?php 		
						} else {
					?>
						<div class="menu">
							<ul class="margin-none">
								<li class="center-flex"><a href="index.php">Inicio</a></li>
								<li class="center-flex"><a href="nosotros.php">Nosotros</a></li>
								<li class="center-flex">
									<a href="beneficios.php">Socios</a>
									<ul class="submenu">
										<li class="center-flex"><a href="beneficios.php">Beneficios</a></li>
									</ul>
								</li>
								<li class="center-flex">
									<a href="reglamentos.php">Estatuto y Reglamentos</a>
									<ul class="submenu">
										<li class="center-flex"><a href="reglamentos.php">Cuotas</a></li>
									</ul>
								</li>
								<li class="center-flex relative">
									<a href="stands.php">Congreso internacional Minero</a>
									<ul class="submenu">
										<li class="center-flex"><a href="stands.php">Stands</a></li>
										<li class="center-flex"><a href="conferencias.php">Conferencias</a></li>
										<li class="center-flex"><a href="reglamentos.php">Cuotas</a></li>
										<li class="center-flex"><a href="formulario.php">Reservaciones</a></li>
										<li class="center-flex"><a href="hospedaje.php">Hospedaje</a></li>
									</ul>
								</li>
								<li class="center-flex">
									<a href="">Noticias</a>
									<ul class="submenu">
										<li class="center-flex"><a href="noticias.php">Galeria</a></li>
									</ul>
								</li>
								<li class="center-flex"><a href="contacto.php">Contacto</a></li>
							</ul>
						</div>
					<?php
						}
					?>
					
				</div>
			</div>
		</header>
		
		<section>