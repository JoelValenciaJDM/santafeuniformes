<?php $this->load->view("sscm/base/headerpag2.php") ?>

<body>



	<div class="container">
		<h2>Para Cortes</h2>
		<?php if (!empty($error)) : ?>
			<p class="alert alert-danger"><?= htmlentities($error) ?></p>
		<?php endif; ?>
		<div class="row">

		</div>
		<div class="card p-4">
			<table id="table" class="w-100">
				<thead>
					<tr>
						<th>No. Corte</th>
						<th>Fecha de corte</th>
						<th>Fecha entrega</th>
						<th>Prenda</th>
						<th>Tela</th>
						<th>Color</th>
						<th>Tono</th>
						<th>Talla</th>
						<th>Cantidad</th>
						<th>Detalles</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($Cortes as $corte) : ?>
						<tr id="idCort<?= $corte->id_corte ?>">
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->id_corte) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->Fecha_corte) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->Fecha_tentativa_entrega) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->prenda." ".$corte->prenda_name) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->tela) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->color) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->tono) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->talla) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($corte->cantidad) ?></td>
							<td>
								<button onclick="corteModel(<?= htmlentities($corte->id_corte) ?>)" class="btn btn-success"><i class="fa fa-eye"></i> Cortar</button>
							</td>
						</tr>
					<?php endforeach; ?>
			</table>
		</div>
		
	</div>
	<script>
		$(document).ready(function() {
			$('#table').DataTable({
				"pagingType": "full_numbers"
			});
		});
		</script>
</body>
<?php $this->load->view("sscm/Corte/PorCorteModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/corte.js') ?>"></script>