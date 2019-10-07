<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Cliente:  <?= htmlentities($Customer->name." ".$Customer->lastname." ". $Customer->second_lastname) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<form action ="<?php echo base_url("index.php/ajax/updateCustomer")?>" method="post" id="form">
		<input type="hidden"  name="id_liente"  value="<?= htmlentities($Customer->id_cliente) ?>"  required>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none"><label for="name">Nombre Cliente:</label></td>
				<td>
					<div>
        	  <div class=" no-margin row col-12">
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"   name="name" placeholder="Nombre Completo" value="<?= htmlentities($Customer->name) ?>"  required>
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"  name="lastname" placeholder="Apellido paterno" value="<?= htmlentities($Customer->lastname) ?>"  required>            
        	  <input type="text" class="form-control col-md-4 col-g-4 col-sm-12"  name="second_lastname" placeholder="Apellido materno" value="<?= htmlentities($Customer->second_lastname) ?> ">
					</div>
          </div>
        </td>

			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="enterprice">Nombre empresa</label></td>
				<td><input type="text" class="form-control" type="text" name="enterprice" placeholder="Nombre empresa" value=" <?= htmlentities($Customer->enterprice) ?>"  required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC" value="<?= htmlentities($Customer->RFC) ?>" ></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="email">Correo electrónico:</label></td>
				<td><input class="form-control" type="text" name="email" placeholder="Correo electrónico" value="<?= htmlentities($Customer->email) ?>"  required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="phone">Teléfono:</label></td>
				<td><input class="form-control" type="text" name="phone" placeholder="Teléfono" value="<?= htmlentities($Customer->phone) ?>"  required></textarea></td>
			</tr>
		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel/'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<input type="submit" name="submit" value="Enviar" />
		<div id="server-results"><!-- For server results --></div>
		<!-- <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Editar</button> -->
		<div id="server-results">
	</form>
</div>

<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

