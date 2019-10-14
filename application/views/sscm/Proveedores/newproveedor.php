<?php $this->load->view("sscm/base/header.php") ?>

<div class="container">
	<h2>Nuevo Proveedor</h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/proveedor/create")); ?>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rs">Razón Social:</label></td>
				<td><input type="text" class="form-control" type="text" name="rs" placeholder="Razón Social" required></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="present">Nombre Representante:</label></td>
				<td><input type="text" class="form-control" type="text" name="present" placeholder="Nombre Representante" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección:</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="suburb">Colinia:</label></td>
				<td><input type="text" class="form-control" type="text" name="suburb" placeholder="Colinia" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="state">Estado:</label></td>
				<td><input type="text" class="form-control" type="text" name="state" placeholder="Estado" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="city">Ciudad:</label></td>
				<td><input class="form-control" type="text" name="city" placeholder="Ciudad" required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone1">Teléfono 1:</label></td>
				<td><input class="form-control" type="text" name="Phone1" placeholder="Teléfono 1" required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone2">Teléfono 2:</label></td>
				<td><input type="text" class="form-control" type="text" name="Phone2" placeholder="Teléfono 2"></td>
			</tr>
		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel/'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Crear</button>

	</form>
</div>
</div>
