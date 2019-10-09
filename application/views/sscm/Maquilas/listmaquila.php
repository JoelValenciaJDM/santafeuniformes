<?php $this->load->view("sscm/base/headerpag.php") ?>

<div class="container">
	<h2>Cliente</h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="row">

			</div>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create")); ?>
      <table id="customers" class="w-100">
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
        	<?php foreach($customers as $customer): ?>
			  		<tr>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($customer->id_cliente) ?></td>
			  			<td><?= htmlentities($customer->name." ".$customer->lastname." ".$customer->second_lastname) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($customer->enterprice) ?></td>
			  			<td class="d-md-table-cell d-none"><?= htmlentities($customer->phone) ?></td>
			  			<td>
			  				<a href="<?= base_url('index.php/sscm/Customer/viewData/'.$customer->id_cliente) ?>" class="btn btn-success"><i class="fa fa-eye"></i> Ver detalles</a>
			  			</td>
			  		</tr>
		  		<?php endforeach; ?>
      </table>
</div>
</div>
<script>
$(document).ready(function() {
    $('#customers').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>