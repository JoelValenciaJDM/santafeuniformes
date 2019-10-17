<?php $this->load->view("sscm/base/headerpag.php") ?>

<div class="container">
	<h2>Proveedores</h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="row">

			</div>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Maqilas/create")); ?>
      <table id="table" class="w-100">
			<thead>
					<tr>
						<th>No. proveedor</th>
						<th>Nombre</th>
						<th>Representante</th>
						<th>Direcion</th>
						<th>Estado</th>
						<th>Telefono 1</th>
						<th>Telefono 2</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
        	<?php foreach($Proveedores as $proveedor): ?>
			  		<tr>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->id_proveedor) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->name) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->present) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->address) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->state) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->Phone1) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($proveedor->Phone2) ?></td>
			  			<td>
			  				<a href="<?= base_url('index.php/sscm/proveedor/viewData/'.$proveedor->id_proveedor) ?>" class="btn btn-success"><i class="fa fa-eye"></i> Ver detalles</a>
			  			</td>
			  		</tr>
		  		<?php endforeach; ?>
      </table>
</div>
</div>
<script>
$(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>