<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Prenda:  <?= htmlentities($Wear->tipoprenda_name. " ".$Wear->prenda_name) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Prenda/create"), 'id="form"'); ?>
		<input type="hidden"  name="id_prenda"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" value="<?= htmlentities($Wear->prenda_name) ?>" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="gener">Genero:</label></td>
				<td><input type="text" class="form-control" type="text" name="gener" placeholder="Genero" value="<?php switch ($Wear->gener): ?><?php case 0: echo("Caballero") ?><?php break;?>
							<?php case 1: echo("Dama")?>
							<?php break;?>
							<?php case 2: echo("Unisex") ?>
							<?php break;?>
							<?php endswitch ?>" required></td>
			</tr>	
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
						<input type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="proveedor" placeholder="Proveedor" value="<?= htmlentities($Wear->proveedor_name) ?>" required>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="type">Categoria:</label></td>
				<td><input type="text" class="form-control" type="text" name="type" placeholder="Categoria" value="<?= htmlentities($Wear->tipoprenda_name) ?>"  required></td>
			</tr>

		</table>
				<br>
		<a href="<?=base_url() . 'index.php/sscm/prenda/list'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<!-- <a href="<?=base_url() . 'index.php/sscm/prenda/deleteData/'.$Wear->id_prenda?>" class="btn btn-danger" id="delite"><i class="fa fa-edit"></i> Eliminar</a> -->
		<a class="btn btn-danger" id="delate"><i class="fa fa-edit"></i> Eliminar</a>
		<a href="<?=base_url() . 'index.php/sscm/Prenda/editData/'.$Wear->id_prenda?>" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>

	</form>
</div>

<!-- Modal Proveedor-->
<div class="modal" id="proveedorTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo form_open_multipart(base_url("index.php/Ajax/createProveedor"), 'id="formProveedor"'); ?>
		<table class="w-100">
		<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" value="<?= htmlentities($Wear->proveedor_name) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rs">Razón Social:</label></td>
				<td><input type="text" class="form-control" type="text" name="rs" placeholder="Razón Social" value="<?= htmlentities($Wear->rs) ?>" readonly required></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC" value="<?= htmlentities($Wear->rfc) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="present">Nombre Representante:</label></td>
				<td><input type="text" class="form-control" type="text" name="present" placeholder="Nombre Representante" value="<?= htmlentities($Wear->present) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección:</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="<?= htmlentities($Wear->address) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="suburb">Colinia:</label></td>
				<td><input type="text" class="form-control" type="text" name="suburb" placeholder="Colinia" value="<?= htmlentities($Wear->suburb) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="state">Estado:</label></td>
				<td><input type="text" class="form-control" type="text" name="state" placeholder="Estado" value="<?= htmlentities($Wear->state) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="city">Ciudad:</label></td>
				<td><input class="form-control" type="text" name="city" placeholder="Ciudad" value="<?= htmlentities($Wear->city) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" value="<?= htmlentities($Wear->cp) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone1">Teléfono 1:</label></td>
				<td><input class="form-control" type="text" name="Phone1" placeholder="Teléfono 1" value="<?= htmlentities($Wear->Phone1) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone2">Teléfono 2:</label></td>
				<td><input type="text" class="form-control" type="text" name="Phone2" placeholder="Teléfono 2" value="<?= htmlentities($Wear->Phone2) ?>" readonly></td>
			</tr>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
			</form>
    </div>
  </div>
</div>


<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

