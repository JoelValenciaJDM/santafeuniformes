<div class="modal" id="customersTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content ml-20" style="width:800px;">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<table id="tableCustomers" class="w-100">
					<thead>
						<tr>
							<th>No. Cliente</th>
							<th>Nombre de cliente</th>
							<th>Empresa</th>
							<th>Telefono</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($customers as $customer) : ?>
							<tr id="id<?= htmlentities($customer->id_cliente) ?>">
								<td class="d-md-table-cell d-none"><?= htmlentities($customer->id_cliente) ?></td>
								<td class="name"><?= htmlentities($customer->name . " " . $customer->lastname . " " . $customer->second_lastname) ?></td>
								<td class="d-md-table-cell d-none"><?= htmlentities($customer->enterprice) ?></td>
								<td class="d-md-table-cell d-none"><?= htmlentities($customer->phone) ?></td>
								<td>
									<button onclick="selectcustomerbutton(<?= htmlentities($customer->id_cliente) ?>)" class="btn btn-success"><i class="fa fa-eye"></i> Seleccionar</button>
								</td>
							</tr>
						<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal Create Customer-->
<div class="modal" id="newCustomerTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<td class="d-md-table-cell d-none"><label for="name">Nombre Cliente:</label></td>
						<td>
							<div>
								<div class=" no-margin row">
									<input type="text" class=" form-control col-md-4 col-g-4 col-sm-12" name="name" placeholder="Nombre Completo" required>
									<input type="text" class=" form-control col-md-4 col-g-4 col-sm-12" name="lastname" placeholder="Apellido paterno" required>
									<input type="text" class="form-control col-md-4 col-g-4 col-sm-12" name="second_lastname" placeholder="Apellido materno">
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
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input id="submitApprove" type="submit" class="btn btn-primary" name="submit" value="Enviar" />
			</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#newTalla").prop('disabled', true);
	});
</script>

<script>
	$(document).ready(function() {
		$('#tableCustomers').DataTable({
			"pagingType": "full_numbers"
		});
	});
</script>