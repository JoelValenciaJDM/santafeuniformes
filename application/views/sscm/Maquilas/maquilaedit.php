<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Cliente:  <?= htmlentities($Maquila->name." ".$Maquila->lastname." ". $Maquila->second_lastname) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<form action ="<?php echo base_url("index.php/ajax/updateMaquila")?>" method="post" id="form">
		<input type="hidden"  name="id_maquila"  value="<?= htmlentities($Maquila->id_maquila) ?>"  required>
		<table class="w-100">
		<tr>
				<td class="d-md-table-cell d-none"><label for="apodo">Apodo</label></td>
				<td><input type="text" class="form-control" type="text" name="apodo" placeholder="Apodo" value="<?= htmlentities($Maquila->apodo) ?>"    required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="name">Nombre Maquila:</label></td>
				<td>
					<div>
        	  <div class=" no-margin row ">
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"   name="name" placeholder="Nombre Completo" value="<?= htmlentities($Maquila->name) ?>"     required>
        	  <input type="text" class=" form-control col-md-4 col-g-4 col-sm-12"  name="lastname" placeholder="Apellido paterno" value="<?= htmlentities($Maquila->lastname) ?>"     required>            
        	  <input type="text" class="form-control col-md-4 col-g-4 col-sm-12"  name="second_lastname" placeholder="Apellido materno" value="<?= htmlentities($Maquila->second_lastname) ?>"     required>
					</div>
          </div>
        </td>

			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="address">Dirección</label></td>
				<td><input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="<?= htmlentities($Maquila->address) ?>"     required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="Suburb">Colinia</label></td>
				<td><input type="text" class="form-control" type="text" name="Suburb" placeholder="Colinia" value="<?= htmlentities($Maquila->Suburb) ?>"    required></td>
			</tr>
			<tr>
			<tr>
        <td class="d-md-table-cell d-none">
            <label for="map">Ubicación de maquila:</label>
        </td>
        <td>
            <div id="map" style="height: 354px; width:100%;"></div>
            <div class="row">
                <input class="form-control" type='hidden' name='lat' id='lat'>
                <input class="form-control" type='hidden' name='lng' id='lng'>
            </div> 
        </td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="celphone">Teléfono Celular:</label></td>
				<td><input class="form-control" type="text" name="celphone" placeholder="Teléfono Celular" value="<?= htmlentities($Maquila->celphone) ?>"     required></textarea></td>
			</tr>
		
			<tr>
				<td class="d-md-table-cell d-none"><label for="phone">Telefono:</label></td>
				<td><input type="text" class="form-control" type="text" name="phone" placeholder="Telefono" value="<?= htmlentities($Maquila->phone) ?>"    ></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="cp">Codigo postal:</label></td>
				<td><input class="form-control" type="text" name="cp" placeholder="Codigo postal" value="<?= htmlentities($Maquila->cp) ?>"     required></textarea></td>
			</tr>

		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel/'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<input type="submit" name="submit" value="Enviar" />
		<div id="server-results"><!-- For server results --></div>
		<!-- <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Editar</button> -->
		<div id="server-results">
	</form>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCpoq1yvjpQMJpjJ4fX_mKvFFt0KY-KLFU&callback=initMap"></script>
        <script>
            var map;
            var myLatLng = {
                lat: <?= $Maquila->lat ?>, 
                lng: <?= $Maquila->lng ?>
            };

            // Create a map object and specify the DOM element for display.
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 14
            });

            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                draggable:true,
                title: 'Maquila'
            });

            document.getElementById('lat').value= myLatLng.lat
            document.getElementById('lng').value= myLatLng.lng

            google.maps.event.addListener(marker,'drag',function(event) {
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
            });

            //marker drag event end
            google.maps.event.addListener(marker,'dragend',function(event) {
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
            });
            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>


