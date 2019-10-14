<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Maquila:  <?= htmlentities($Maquila->apodo) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create"), 'id="form"'); ?>
		<input type="hidden"  name="id_maquila"  value="<?= htmlentities($Maquila->id_maquila) ?>"  required>
		<table class="w-100">
		<tr>
				<td class="d-md-table-cell d-none"><label for="apodo">Apodo</label></td>
				<td><input type="text" class="form-control" type="text" name="apodo" placeholder="Apodo" value="<?= htmlentities($Maquila->apodo) ?>" readonly required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="name">Nombre Maquila:</label></td>
				<td>
					<div>
        	  <div class=" no-margin row ">
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"   name="name" placeholder="Nombre Completo" value="<?= htmlentities($Maquila->name) ?>" readonly  required>
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"  name="lastname" placeholder="Apellido paterno" value="<?= htmlentities($Maquila->lastname) ?>" readonly  required>            
        	  <input type="text" class="form-control col-md-4 col-g-4 col-sm-12"  name="second_lastname" placeholder="Apellido materno" value="<?= htmlentities($Maquila->second_lastname) ?>" readonly  required>
					</div>
          </div>
        </td>

			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="<?= htmlentities($Maquila->address) ?>" readonly  required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Suburb">Colinia</label></td>
				<td><input type="text" class="form-control" type="text" name="Suburb" placeholder="Colinia" value="<?= htmlentities($Maquila->Suburb) ?>" readonly required></td>
			</tr>
			<tr>
        <td class="d-md-table-cell d-none">
            <label for="map">Lugar de la dependencia:</label>
        </td>
        <td>
		<iframe 
                width="100%" 
                height="400px"
                frameborder="0"
                scrolling="no"
                marginheight="0"
				marginwidth="0"
				allowfullscreen
				src="<?= 'https://maps.google.com/maps?q='.$Maquila->lat.','.$Maquila->lng.'&hl=es;z=14&amp;output=embed'  ?>"
            >
            </iframe>
        </td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="celphone">Teléfono Celular:</label></td>
				<td><input class="form-control" type="text" name="celphone" placeholder="Teléfono Celular" value="<?= htmlentities($Maquila->celphone) ?>" readonly  required></textarea></td>
			</tr>
		
			<tr>
				<td class="d-md-table-cell d-none"><label for="phone">Telefono:</label></td>
				<td><input type="text" class="form-control" type="text" name="phone" placeholder="Telefono" value="<?= htmlentities($Maquila->phone) ?>" readonly ></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" value="<?= htmlentities($Maquila->cp) ?>" readonly  required></textarea></td>
			</tr>

		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<!-- <a href="<?=base_url() . 'index.php/sscm/customer/deleteData/'.$Customer->id_cliente?>" class="btn btn-danger" id="delite"><i class="fa fa-edit"></i> Eliminar</a> -->
		<a class="btn btn-danger" id="delate"><i class="fa fa-edit"></i> Eliminar</a>
		<a href="<?=base_url() . 'index.php/sscm/maquila/editData/'.$Maquila->id_maquila?>" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>

	</form>
</div>

<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

