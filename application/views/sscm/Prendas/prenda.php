<?php $this->load->view("sscm/base/header.php") ?>


<div class="container">
	<h2>Proveedor:  <?= htmlentities($Proveedor->name) ?></h2>
	<?php if(!empty($error)): ?>
	<p class="alert alert-danger"><?= htmlentities($error) ?></p>
	<?php endif; ?>
	<div class="card p-4">
		<?php echo form_open_multipart(base_url("index.php/sscm/Customer/create"), 'id="form"'); ?>
		<input type="hidden"  name="id_proveedor"  value="<?= htmlentities($Proveedor->id_proveedor) ?>"  required>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<table class="w-100">
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label for="name">Nombre:</label></td>
				<td><input type="text" class="form-control" type="text" name="name" placeholder="Nombre" required></td>
			</tr>
			<tr>
				<td class="d-md-table-cell d-none"><label for="gener">Genero:</label></td>
				<td><select type="text" class="form-control" type="text" name="gener" required>
					<option value="0">Caballero</option>
					<option value="1">Dama</option>
					<option value="3">Unisex</option>
				</select></td>
			</tr>			
			<tr>
				<td class="d-md-table-cell d-none "><label for="id_proveedor">Proveedor:</label></td>
				<td>
					<div>
						<div class="no-margin row">
							<select id="selectList" type="text" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_proveedor" required>
								<?php foreach($proveedores as $proveedor):?>
								<option  value="<?= $proveedor->id_proveedor?>"><?=$proveedor->name?></option>
								<?php endforeach; ?>
							</select>
							<button type="button" class="btn btn-success  col-md-2 col-g-2 col-sm-2" data-backdrop="false"  data-toggle="modal" data-target="#proveedorTrigger"><i class="fa fa-save"></i>Proveedor</button>
						</div>
        	</div>
				</td>
			</tr>

			<tr>
				<td class="d-md-table-cell d-none"><label for="id_tipos_prendas">Tipo de prenda:</label></td>
				<div>
				<td>
        	<div class=" no-margin row">
						<select type="text" id="selectListtipoprenda" class="form-control col-md-10 col-g-10 col-sm-10" type="text" name="id_tipos_prendas" required>
							<?php foreach($type_prendas as $tp):?>
							<option value="<?= $tp->id_tipo_prenda?>"><?=$tp->name?></option>
							<?php endforeach;?> </select>
							<button class="btn btn-success col-md-2 col-g-2 col-sm-2" type="button" id="tipoprenda" data-backdrop="false"  data-toggle="modal" data-target="#tipoprendaTrigger"><i class="fa fa-save"></i>Prenda</button>
							</div>
          </div>
        </td>
			</tr>

		</table>
		<br>
		<a href="<?=base_url() . 'index.php/sscm/cpanel'?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar</a>
		<!-- <a href="<?=base_url() . 'index.php/sscm/customer/deleteData/'.$Customer->id_cliente?>" class="btn btn-danger" id="delite"><i class="fa fa-edit"></i> Eliminar</a> -->
		<a class="btn btn-danger" id="delate"><i class="fa fa-edit"></i> Eliminar</a>
		<a href="<?=base_url() . 'index.php/sscm/Proveedor/editData/'.$Proveedor->id_proveedor?>" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>

	</form>
</div>

<script src="<?php echo base_url('index.php/../template/js/ajax.js')?>"></script>

