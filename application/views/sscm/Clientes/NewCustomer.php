<?php $this->load->view("sscm/base/header.php") ?>

<div class="container">
	<h2>Nuevo Cliente</h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create")); ?>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none"><label for="name">Nombre Cliente:</label></td>
				<td>
					<div>
        	  <div class=" no-margin row col-12">
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"   name="name" placeholder="Nombre Completo" required>
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"  name="lastname" placeholder="Apellido paterno" required>            
        	  <input type="text" class="form-control col-md-4 col-g-4 col-sm-12"  name="second_lastname" placeholder="Apellido materno" required>
					</div>
          </div>
        </td>

			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="enterprice">Nombre empresa</label></td>
				<td><input type="text" class="form-control" type="text" name="enterprice" placeholder="Nombre empresa" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="rfc">RFC:</label></td>
				<td><input type="text" class="form-control" type="text" name="rfc" placeholder="RFC"></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="email">Correo electrónico:</label></td>
				<td><input class="form-control" type="text" name="email" placeholder="Correo electrónico" required></textarea></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="phone">Teléfono:</label></td>
				<td><input class="form-control" type="text" name="phone" placeholder="Teléfono" required></textarea></td>
			</tr>
		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel/'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Crear</button>
	</form>
</div>
</div>
