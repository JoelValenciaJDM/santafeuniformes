<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Rollo:  <?= htmlentities($Tela->id_rollo) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create"), 'id="form"'); ?>
		<input type="hidden"  name="id_rollo"  value="<?= htmlentities($Tela->id_rollo) ?>" readonly required>
		<table class="w-100">
		<tr>
			<td class="d-md-table-cell d-none "><label for="tela_name">Tela:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<input type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="tela_name" placeholder="Nombre Tela" value="<?= htmlentities($Tela->tela_name) ?>" readonly required>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#tipotelaTrigger"><i class="fa fa-save"></i>Tela</button>
						</div>
        	</div>
				</td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<input type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="proveedor" placeholder="Proveedores" value="<?= htmlentities($Tela->proveedor_name) ?>" readonly required>	
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="Metros">Metros:</label></td>
				<td><input type="text" class="form-control" type="text" name="Metros" placeholder="Metros" value="<?= htmlentities($Tela->total_metros) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="Ancho">Ancho:</label></td>
				<td><input type="text" class="form-control" type="text" name="Ancho" placeholder="Ancho" value="<?= htmlentities($Tela->Ancho) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="Fecha_ingreso">Fecha de ingreso:</label></td>
				<td><input type="date" class="form-control" type="text" name="Fecha_ingreso" placeholder="Fecha de ingreso" value="<?= htmlentities($Tela->Fecha_ingreso) ?>"readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="Fecha_ingreso">Fecha de modificación:</label></td>
				<td><input type="date" class="form-control" type="text" name="Fecha_modificacion" placeholder="Fecha de modificacion" value="<?= htmlentities($Tela->Fecha_modificacion) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="Color">Colorecha de modificación:</label></td>
				<td><input type="text" class="form-control" type="text" name="Color" placeholder="Color" value="<?= htmlentities($Tela->Color) ?>" readonly required></td>
			</tr>

		</table>

				<br>
		<a href="<?=base_url() . 'index.php/sscm/tela/listtela/'.$Tela->id_tela.'/'.$Tela->Color?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<!-- <a href="<?=base_url() . 'index.php/sscm/tela/deleteData/'.$Tela->id_rollo?>" class="btn btn-danger" id="delite"><i class="fa fa-edit"></i> Eliminar</a> -->
		<a class="btn btn-danger" id="delate"><i class="fa fa-edit"></i> Eliminar</a>
		<a href="<?=base_url() . 'index.php/sscm/tela/editData/'.$Tela->id_rollo?>" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>

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
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" value="<?= htmlentities($Tela->proveedor_name) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rs">Razón Social:</label></td>
				<td><input type="text" class="form-control" type="text" name="rs" placeholder="Razón Social" value="<?= htmlentities($Tela->rs) ?>" readonly required></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC" value="<?= htmlentities($Tela->rfc) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="present">Nombre Representante:</label></td>
				<td><input type="text" class="form-control" type="text" name="present" placeholder="Nombre Representante" value="<?= htmlentities($Tela->present) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección:</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="<?= htmlentities($Tela->address) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="suburb">Colinia:</label></td>
				<td><input type="text" class="form-control" type="text" name="suburb" placeholder="Colinia" value="<?= htmlentities($Tela->suburb) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="state">Estado:</label></td>
				<td><input type="text" class="form-control" type="text" name="state" placeholder="Estado" value="<?= htmlentities($Tela->state) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="city">Ciudad:</label></td>
				<td><input class="form-control" type="text" name="city" placeholder="Ciudad" value="<?= htmlentities($Tela->city) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" value="<?= htmlentities($Tela->cp) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone1">Teléfono 1:</label></td>
				<td><input class="form-control" type="text" name="Phone1" placeholder="Teléfono 1" value="<?= htmlentities($Tela->Phone1) ?>" readonly required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Phone2">Teléfono 2:</label></td>
				<td><input type="text" class="form-control" type="text" name="Phone2" placeholder="Teléfono 2" value="<?= htmlentities($Tela->Phone2) ?>" readonly></td>
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


<!-- Modal tela-->
<div class="modal" id="tipotelaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo form_open_multipart(base_url("index.php/Ajax/createTipoTela"), 'id="formTipoTela"'); ?>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="Nombre" placeholder="Nombre" value="<?= htmlentities($Tela->tela_name) ?>" readonly required></td>
			</tr>	
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Descripción:</label></td>
				<td><input type="text" class="form-control" type="text" name="Descripcion" placeholder="Descripcion" value="<?= htmlentities($Tela->Descripcion) ?>" readonly required></td>
			</tr>
			<tr>
			<td class="d-md-table-cell d-none "><label for="Composicion">Composicion:</label></td>
			<td><input type="text" class="form-control" type="text" name="Composicion" placeholder="Composicion" value="<?= htmlentities($Tela->Composicion) ?>" readonly required></td>
			</tr>		
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>
<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

