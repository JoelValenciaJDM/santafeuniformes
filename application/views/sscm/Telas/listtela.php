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
						<th>No. Rollo</th>
						<th>Tela</th>
						<th>Color</th>
						<th>Metros</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
        	<?php foreach($Telas as $tela): ?>
			  		<tr>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($tela->total_rollos) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($tela->tela_name) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($tela->Color) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($tela->total_metros) ?></td>

			  			<td><a href="<?= base_url('index.php/sscm/prenda/viewData/'.$tela->id_tela) ?>" class="btn btn-success"><i class="fa fa-eye"></i> Ver detalles</a></td>
			  		</tr>
		  		<?php endforeach; ?>
      </table>
			<a href="<?=base_url() . 'index.php/sscm/tela/list'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>

</div>
</div>
<script>
$(document).ready(function() {
    $('#table').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>