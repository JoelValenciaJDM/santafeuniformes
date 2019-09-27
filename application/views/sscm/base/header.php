<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?= base_url('assets/media/logos/logo_square.jpg') ?>">
	<title>[Admin] ISSSTE Colima</title>
	<?php $this->load->view("sscm/base/head.php") ?>
	
</head>
<body class="bg-light">
	<div class="container-fluid">
		
		<div class="row">
			<nav class="col navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="<?= base_url('index.php/admin/panel') ?>">Santa Fe Uniformes</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('index.php/sscm/cpanel') ?>">Inicio <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<ul class="navbar-nav mr-3">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?= htmlentities($first_name)." ".htmlentities($last_name) ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('index.php/admin/me/edit') ?>"><i class="fa fa-edit"></i> Editar perfil</a>
								<a class="dropdown-item" href="<?= base_url('index.php/admin/me/newPassword') ?>"><i class="fa fa-key"></i> Contraseña</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('index.php/sscm/login/logout') ?>"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<br>