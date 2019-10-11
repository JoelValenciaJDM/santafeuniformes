<?php $this->load->view("sscm/base/headerpag.php") ?>

<div class="container">
	<h2>Maquilas</h2>
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
						<th>No. Maquila</th>
						<th>Apodo</th>
						<th>Dirección</th>
						<th>Teléfono</th>
						<th>Celular</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
        	<?php foreach($maquilas as $maquila): ?>
			  		<tr>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($maquila->id_maquila) ?></td>
			  			<td><?= htmlentities($maquila->apodo) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($maquila->address) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($maquila->phone) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($maquila->celphone) ?></td>
			  			<td>
			  				<a href="<?= base_url('index.php/sscm/Maquila/viewData/'.$maquila->id_maquila) ?>" class="btn btn-success"><i class="fa fa-eye"></i> Ver detalles</a>
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