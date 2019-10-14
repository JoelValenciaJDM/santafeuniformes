<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Proveedor:  <?= htmlentities($Proveedor->name) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create"), 'id="form"'); ?>
		<input type="hidden"  name="id_proveedor"  value="<?= htmlentities($Proveedor->id_proveedor) ?>"  required>
		<table class="w-100">
		<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" value="<?= htmlentities($Proveedor->name) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rs">Razón Social:</label></td>
				<td><input type="text" class="form-control" type="text" name="rs" placeholder="Razón Social" value="<?= htmlentities($Proveedor->rs) ?>" readonly required></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC" value="<?= htmlentities($Proveedor->rfc) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="present">Nombre Representante:</label></td>
				<td><input type="text" class="form-control" type="text" name="present" placeholder="Nombre Representante" value="<?= htmlentities($Proveedor->present) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección:</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="<?= htmlentities($Proveedor->address) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="suburb">Colinia:</label></td>
				<td><input type="text" class="form-control" type="text" name="suburb" placeholder="Colinia" value="<?= htmlentities($Proveedor->suburb) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="state">Estado:</label></td>
				<td><input type="text" class="form-control" type="text" name="state" placeholder="Estado" value="<?= htmlentities($Proveedor->state) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="city">Ciudad:</label></td>
				<td><input class="form-control" type="text" name="city" placeholder="Ciudad" value="<?= htmlentities($Proveedor->city) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" value="<?= htmlentities($Proveedor->cp) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone1">Teléfono 1:</label></td>
				<td><input class="form-control" type="text" name="Phone1" placeholder="Teléfono 1" value="<?= htmlentities($Proveedor->Phone1) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone2">Teléfono 2:</label></td>
				<td><input type="text" class="form-control" type="text" name="Phone2" placeholder="Teléfono 2" value="<?= htmlentities($Proveedor->Phone2) ?>" readonly></td>
			</tr>
		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<!-- <a href="<?=base_url() . 'index.php/sscm/customer/deleteData/'.$Customer->id_cliente?>" class="btn btn-danger" id="delite"><i class="fa fa-edit"></i> Eliminar</a> -->
		<a class="btn btn-danger" id="delate"><i class="fa fa-edit"></i> Eliminar</a>
		<a href="<?=base_url() . 'index.php/sscm/Proveedor/editData/'.$Proveedor->id_proveedor?>" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>

	</form>
</div>

<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

