<?php $this->load->view("sscm/base/header.php") ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<div class="container">
<h2>Prenda:  <?= htmlentities($Wear->tipoprenda_name. " ".$Wear->prenda_name) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<form action ="<?php echo base_url("index.php/ajax/updateWear")?>" method="post" id="form">
		<input type="hidden"  name="id_prenda"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
		<table class="w-100">
		<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" value="<?= htmlentities($Wear->prenda_name) ?>" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
					<td>
						<div>
							<div class="no-margin row">
								<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
									<?php foreach($proveedores as $proveedor):?>
									<option  value="<?= $proveedor->id_proveedor?>" <?php if($Wear->id_proveedor == $proveedor->id_proveedor){ echo ('selected');}?>><?=$proveedor->name?></option>
									<?php endforeach; ?>
								</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>" <?php if($Wear->id_proveedor == $proveedor->id_proveedor){ echo ('selected');}?>><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"  <?php if($Wear->id_tipos_prenda == $tp->id_tipo_prenda){ echo ('selected');}?>><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
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

<!-- Modal Proveedor-->
<div class="modal" id="proveedorTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo form_open_multipart(base_url("index.php/Ajax/createProveedor"), 'id="formProveedor"'); ?>
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
				<td><input class="form-contittrol" type="text" name="cp" placeholder="Codigo postal" required></textarea></td>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>


<!-- Modal Proveedor Clase de prenda-->
<div class="modal" id="tipoprendaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
			<?php echo form_open_multipart(base_url("index.php/Ajax/createTipoPrenda"), 'id="formTipoPrenda"'); ?>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Categoría:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Categoría" required></td>
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


