<?php $this->load->view("sscm/base/headerpag2.php") ?>

<body>



	<div class="container">
		<h2>Clientes</h2>
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
						<th>Fecha Entrega</th>
						<th>Categoria</th>
						<th>Prenda</th>
						<th>Tela</th>
						<th>Color</th>
						<th>Tono</th>
						<th>Talla</th>
						<th>Cantidad</th>
						<th>Cortar</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($Pedidos as $pedido) : ?>
						<tr id="id<?= $pedido->id_pedido_tallas ?>">
							<td class="d-md-table-cell d-none idCompuesto "><?= htmlentities($pedido->id_pedido . "-" . $pedido->id_prenda_pedido . "-" . $pedido->id_pedido_tallas) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->Fecha_entrega) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->clase) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->prenda) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->tela) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->color) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->tono) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->talla) ?></td>
							<td class="d-md-table-cell d-none"><?= htmlentities($pedido->cantidad) ?></td>
							<td>
								<button onclick="selectpedidoprenda(<?= htmlentities($pedido->id_pedido_tallas) ?>)" class="btn btn-success"><i class="fa fa-eye"></i> Cortar</button>
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
<?php $this->load->view("sscm/Corte/CorteModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/corte.js') ?>"></script>