<?php $this->load->view("sscm/base/headerpag2.php") ?>
<body>	
	<div class="container">
		<h2>Nuevo Pedido</h2>
		<?php if (!empty($error)) : ?>
		<p class="alert alert-danger"><?= htmlentities($error) ?></p>
		<?php endif; ?>
	<div class="card p-4 ">
		<h3>Datos Generales</h3>
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create")); ?>
		<div>
			<!--no visible data-->
			<input type="date" class="form-control sr-only" id="update-date">
			<input type="text" class="form-control sr-only" id="id_user">
		</div>
		<!--dates -->
		<div class="form-row align-items-center mb-2">
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_ingres">Fecha de igreso</label>
			</div>
			<div class="col-md-3 col-g-3 col-sm-3">
				<input type="date" class="form-control mb-2" id="date_ingres">
			</div>
			<div class="col-md-1 col-g-1 col-sm-2">
				</div>
			<div class="col-md-1 col-g-1 col-sm-1">
				<label class="" for="date_delivery">Fecha de entrega</label>
			</div>
			<div class="col-md-3 col-g-3 col-sm-3">
				<input type="date" class="form-control mb-2" id="date_delivery">
			</div>
		</div>
		<!--customers -->
		<div class="form-row align-items-center mb-2">
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="customer">Nombre del cliente</label>
			</div>
			<div class="col-md-5 col-g-5 col-sm-5">
				<input type="text" class="form-control mb-2" id="customer">
			</div>
			<div class="col-md-1 col-g-1 col-sm-1">
				<button type="button" class="btn btn-success mb-2" data-backdrop="false" data-toggle="modal" data-target="#customersTrigger">Cliente</button>
			</div>
			<div class="col-md-3 col-g-3 col-sm-3">
				<button type="button" class="btn btn-success mb-2" data-backdrop="false" data-toggle="modal" data-target="#newCustomerTrigger">Nuevo Cliente</button>
			</div>
		</div>
		<!--seller -->
		<div class="form-row align-items-center mb-2">
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="id_seller">Vendedor</label>
			</div>
			<div class="col-md-5 col-g-5 col-sm-5">
				<select id="selectsellerlist" type="text" class="form-control mb-2" type="text" name="id_proveedor" required>
					<?php foreach ($sellers as $seller) : ?>
					<option value="<?= $seller->id_seller ?>"><?= $seller->name." ".$seller->father_lastname." " .$seller->mother_lastname." " ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<br>
		<hr>
		<h3>Espesificación de pedido</h3>
		<!-- TH Order data -->
		<div class="form-row align-items-center mb-2">
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">No.Prenda</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_ingres">Prenda</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Talla</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Tela</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Color</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Cantidad</label>
			</div>
		</div>
		<hr>
		
		<!-- TR Order data -->
		<!-- <div class="form-row align-items-center mb-2">
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">No.Prenda</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_ingres">Prenda</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Talla</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Tela</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Color</label>
			</div>
			<div class="col-md-2 col-g-2 col-sm-2">
				<label class="" for="date_delivery">Cantidad</label>
			</div>
		</div> -->

		<!-- Button Order data -->
		<div class="col-md-2 col-g-2 col-sm-2">
				<button type="button" class="btn btn-success mb-2" data-backdrop="false" data-toggle="modal" data-target="#ordertrackTrigger">Agregar</button>
				</div>
		</div>
		



		<br>
		<a href="<?= base_url() . 'index.php/sscm/cpanel/' ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Crear</button>
	</form>
	</div>
</div>
<script src="<?= base_url('index.php/../template/js/pagination/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>
<link rel="stylesheet" type="text/css"  href="<?= base_url('index.php/../template/js/pagination/jquery.dataTables.min.css')?>">


<?php $this->load->view("sscm/Pedidos/modal_customer.php") ?>
<?php $this->load->view("sscm/Pedidos/modal_pedido.php") ?>
</body>
<script src="<?php echo base_url('index.php/../template/js/localStorage.js') ?>"></script>
<script src="<?php echo base_url('index.php/../template/js/newordertrack.js') ?>"></script>