<?php $this->load->view("sscm/base/header.php") ?>
  
	<div class="container">
		
		<!-- Error message -->
		<?php if(isset($error)): ?>
		
		<p class="alert alert-danger"><?= $error ?></p>
		
		<?php endif; ?>
		<?php if(isset($success)): ?>
		
		<p class="alert alert-success"><?= $success ?></p>
		
		<?php endif; ?>
		<?php if(isset($email)): ?>
		<p class="alert alert-success"><?= $email ?></p>
		  
		<?php endif; ?>


		<?php if(in_array("coustumers", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="fa fa-cube"></i> Clientes</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/sscm/customer/newCustomer') ?>"><div><i class="far fa-calendar-plus fa-2x"></i><br>Nuevo Cliente</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/sscm/customer/listCustomer') ?>"><div><i class="far fa-calendar-alt fa-2x"></i><br>Administrar Clientes</div></a>
		</div>
		<?php endif; ?>

		<?php if(in_array("order", $rights)): ?>
		
		<div class="row panel-title">
			<h2><i class="fa fa-edit"></i> Ordenes</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/notes/new') ?>"><div><i class="far fa-sticky-note fa-2x"></i><br>Nueva Orden</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/notes/list') ?>"><div><i class="far fa-edit fa-2x"></i><br>Administrar Orden</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("maquilas", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="fa fa-edit"></i> Maquila</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/medical/new') ?>"><div><i class="far fa-sticky-note fa-2x"></i><br>Nueva Maquila</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/medical/list') ?>"><div><i class="far fa-edit fa-2x"></i><br>Administrar Maquila</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("cut", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="fa fa-cube"></i> Corte</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/courses/new') ?>"><div><i class="far fa-calendar-plus fa-2x"></i><br>Nuevo Corte</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/courses/list') ?>"><div><i class="far fa-calendar-alt fa-2x"></i><br>Administrar Corte</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("content", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="fa fa-align-left"></i> Contenido</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/programs/list') ?>"><div><i class="fa fa-cogs fa-2x"></i><br>Programas</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/banner/list') ?>"><div><i class="far fa-image fa-2x"></i><br>Banner</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("comments", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="far fa-envelope"></i> Comentarios</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/comment') ?>"><div><i class="far fa-comment-alt fa-2x"></i><br>Ver comentarios</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("directories", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="far fa-address-book"></i> Directorios</h2>
		</div>
		<div class="row">
		<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/directories/list') ?>"><div><i class="far fa-address-book fa-2x"></i><br>Directorios</div></a>
		</div>
		<?php endif; ?>
		<?php if(empty($rights)): ?>
		<div class="row">
			<div class="alert alert-warning col">
				<i class="fa fa-exclamation-triangle"></i> <b>No tienes privilegios.</b> Pídele al Administrador que te otorgue los necesarios.
			</div>
		</div>
		<?php endif; ?>
		<?php if(in_array("users", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="far fa-user"></i> Usuarios</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/user/new') ?>"><div><i class="fa fa-user-plus fa-2x"></i><br>Crear usuario</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/user/list') ?>"><div><i class="fa fa-users fa-2x"></i><br>Administrar usuarios</div></a>
		</div>
		<?php endif; ?>
		<?php if(in_array("activities", $rights)): ?>
		<div class="row panel-title">
			<h2><i class="fa fa-cube"></i> Actividades de casa de día</h2>
		</div>
		<div class="row">
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/activities/new') ?>"><div><i class="far fa-calendar-plus fa-2x"></i><br>Nueva actividad</div></a>
			<a class="col-md-6 col-sm-12 col-12 section" href="<?= base_url('index.php/admin/activities/list') ?>"><div><i class="far fa-calendar-alt fa-2x"></i><br>Administrar actividades</div></a>
		</div>
		<?php endif; ?>
		<br><br><br><br>
	</div>
<?php $this->load->view('sscm/base/footer'); ?>