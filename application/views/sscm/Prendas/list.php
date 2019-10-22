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
						<th>No. Prenda</th>
						<th>Categoria</th>
						<th>Prenda</th>
						<th>Proveedor</th>
						<th>Genero</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
        	<?php foreach($Wears as $wear): ?>
			  		<tr>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($wear->id_prenda) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($wear->tipoprenda_name) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($wear->prenda_name) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($wear->proveedor_name) ?></td>
							<td class="d-md-table-cell d-none"><?php switch ($wear->gener): ?><?php case 0: echo("Caballero") ?><?php break;?>
							<?php case 1: echo("Dama")?>
							<?php break;?>
							<?php case 2: echo("Unisex") ?>
							<?php break;?>
							<?php endswitch ?></td>
							<td>
			  				<a href="<?= base_url('index.php/sscm/prenda/viewData/'.$wear->id_prenda) ?>" class="btn btn-success"><i class="fa fa-eye"></i> Ver detalles</a>
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