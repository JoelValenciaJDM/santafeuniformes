
<!-- Modal cantidad de tela por prenda y talla-->
<div class="modal" id="advancedOptionsTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Opciones Avanzadas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo form_open_multipart(base_url("index.php/Ajax/advancedOptions"), 'id="formAdvancedOptions"'); ?>
      <input type="hidden"  name="id_prenda" id="id_prenda"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
      <input type="hidden"  name="tallajeOld" id="tallajeOld"  value="<?= htmlentities($Wear->tallaje) ?>"  required>

    <table class="w-100">
        <tr>
				<td class="d-md-table-cell d-none"><label for="tallaje">Tallaje:</label></td>
				<td><select type="text" id="tallaje" class="form-control" type="text" name="tallaje" required>
					<option value="0" <?php if($Wear->tallaje == 0){ echo ('selected');}?>>Alfanumerico (XCH-5XG)</option>
					<option value="1" <?php if($Wear->tallaje == 1){ echo ('selected');} ?>>Numerico (26-58)</option>
					<option value="2" <?php if($Wear->tallaje == 2){ echo ('selected');} ?>>Niños (1-18)</option>
			  	</select></td>
			</tr>		
      <tr>
      <td class="d-md-table-cell d-none"><label for="id_tipo_uso">Usos:</label></td>
				<td><select type="text" id="id_uso" class="form-control" type="text" name="id_tipo_uso" required>
					<option value="1"<?php if($Wear->cantidad_telas== 1){ echo ('selected');}?>>Principal</option>
					<option value="2"<?php if($Wear->cantidad_telas== 2){ echo ('selected');} ?>>Secundaria</option>
					<option value="3"<?php if($Wear->cantidad_telas== 3){ echo ('selected');} ?>>Terciaria </option>
          <option value="4"<?php if($Wear->cantidad_telas== 4){ echo ('selected');} ?>>Cuarta</option>
			  	</select></td>
			</tr>		
      <tr>
      <td class="d-md-table-cell d-none"><label for="forro">Forro:   </label></td>
      <td><input type="checkbox" id="forro" name="forro" value="1"  <?php if($Wear->forro == 1){ echo ('checked');}?>><br></td>
			</tr>	
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>

<!-- Modal consumo principal-->
<div class="modal" id="principalTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consumo tela principal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<?php echo form_open_multipart(base_url("index.php/Ajax/dataConsumo"), 'id="formConsumoPrincipal"'); ?>
    <table class="w-100">
    <?php foreach ($tallas as $talla):?> 
    <?php ?>
      <?php if($talla->id_tipo_talla == $Wear->tallaje  && $talla->id_tipo_uso==1):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
      <input type="hidden"  name="id_prenda_tamaño_consumo" id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$talla->id_talla) ?>"><?echo($talla->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($talla->id_talla) ?>" placeholder="Metros de tela" value="<?= htmlentities($talla ->Consum) ?>"  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$talla->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
</td>
      </tr>	
      <?endif?>
    <?php endforeach?>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>

<!-- Modal consumo de secundaria-->
<div class="modal" id="secundariaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consumo de tela secundaria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if(!$secundarias){ ?>
			<?php echo form_open_multipart(base_url("index.php/Ajax/createSecundaria"), 'id="formConsumoSecundaria"'); ?>
      <?php }else{ ?>
      <?php echo form_open_multipart(base_url("index.php/Ajax/updateSecundaria"), 'id="formConsumoSecundaria"'); ?>
      <?php } ?>

    <table class="w-100">
    <input type="hidden"  name="id_talla" id="id_talla"  value="<?= htmlentities($talla->id_talla) ?>"  required>
    <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
    <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
    <input type="hidden"  name="id_prenda_tamaño_consumo" id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>

    <?php if(!$secundarias){ ?>
      
      <?php foreach ($tallas as $talla):?> 
      <?php ?>
      <?php if($talla->id_tipo_talla == $Wear->tallaje && $talla->id_tipo_uso == 1):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$talla->id_talla) ?>"><?echo($talla->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($talla->id_talla) ?>" placeholder="Metros de tela" value=0.00  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$talla->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>
    <?php }else{ ?>
      <?php foreach ($secundarias as $secundaria):?> 
      <?php ?>
      <!-- <?php echo( $secundaria->id_tipo_uso." ".$secundaria->Nombre." ")?> -->
      <?php if($secundaria->id_tipo_talla == $Wear->tallaje):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($secundaria->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$secundaria->id_talla) ?>"><?echo($secundaria->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($secundaria->id_talla) ?>" placeholder="Metros de tela"  value="<?= htmlentities($secundaria->Consum) ?>"  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$secundaria->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($secundaria->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>

    <?php } ?>

		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>

<!-- Modal consumo de terciaria-->
<div class="modal" id="terciariaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consumo de tela terciaria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if(!$terciarias){ ?>
			<?php echo form_open_multipart(base_url("index.php/Ajax/createTerciaria"), 'id="formConsumoTerciaria"'); ?>
      <?php }else{ ?>
      <?php echo form_open_multipart(base_url("index.php/Ajax/updateTerciaria"), 'id="formConsumoTerciaria"'); ?>
      <?php } ?>

    <table class="w-100">
    <input type="hidden"  name="id_talla" id="id_talla"  value="<?= htmlentities($talla->id_talla) ?>"  required>
    <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
    <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
    <input type="hidden"  name="id_prenda_tamaño_consumo" id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>

    <?php if(!$terciarias){ ?>
      
      <?php foreach ($tallas as $talla):?> 
      <?php ?>
      <?php if($talla->id_tipo_talla == $Wear->tallaje && $talla->id_tipo_uso == 1):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$talla->id_talla) ?>"><?echo($talla->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($talla->id_talla) ?>" placeholder="Metros de tela" value=0.00  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$talla->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>
    <?php }else{ ?>
      <?php foreach ($terciarias as $terciaria):?> 
      <?php ?>
      <!-- <?php echo( $terciaria->id_tipo_uso." ".$terciaria->Nombre." ")?> -->
      <?php if($terciaria->id_tipo_talla == $Wear->tallaje):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($terciaria->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$terciaria->id_talla) ?>"><?echo($terciaria->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($terciaria->id_talla) ?>" placeholder="Metros de tela"  value="<?= htmlentities($terciaria->Consum) ?>"  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$terciaria->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($terciaria->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>

    <?php } ?>

		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>

<!-- Modal consumo de cuarta-->
<div class="modal" id="cuartaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consumo de tela cuarta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if(!$cuartas){ ?>
			<?php echo form_open_multipart(base_url("index.php/Ajax/createCuarta"), 'id="formConsumoCuarta"'); ?>
      <?php }else{ ?>
      <?php echo form_open_multipart(base_url("index.php/Ajax/updateCuarta"), 'id="formConsumoCuarta"'); ?>
      <?php } ?>

    <table class="w-100">
    <input type="hidden"  name="id_talla" id="id_talla"  value="<?= htmlentities($talla->id_talla) ?>"  required>
    <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
    <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
    <input type="hidden"  name="id_prenda_tamaño_consumo" id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>

    <?php if(!$cuartas){ ?>
      
      <?php foreach ($tallas as $talla):?> 
      <?php ?>
      <?php if($talla->id_tipo_talla == $Wear->tallaje && $talla->id_tipo_uso == 1):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$talla->id_talla) ?>"><?echo($talla->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($talla->id_talla) ?>" placeholder="Metros de tela" value=0.00  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$talla->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>
    <?php }else{ ?>
      <?php foreach ($cuartas as $cuarta):?> 
      <?php ?>
      <!-- <?php echo( $cuarta->id_tipo_uso." ".$cuarta->Nombre." ")?> -->
      <?php if($cuarta->id_tipo_talla == $Wear->tallaje):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($cuarta->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$cuarta->id_talla) ?>"><?echo($cuarta->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($cuarta->id_talla) ?>" placeholder="Metros de tela"  value="<?= htmlentities($cuarta->Consum) ?>"  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$cuarta->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($cuarta->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>

    <?php } ?>

		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>


<!-- Modal consumo de forro-->
<div class="modal" id="ForroTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Consumo de forro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php if(!$forros){ ?>
			<?php echo form_open_multipart(base_url("index.php/Ajax/createForro"), 'id="formConsumoForro"'); ?>
      <?php }else{ ?>
      <?php echo form_open_multipart(base_url("index.php/Ajax/updateForro"), 'id="formConsumoForro"'); ?>
      <?php } ?>

    <table class="w-100">
    <input type="hidden"  name="id_talla" id="id_talla"  value="<?= htmlentities($talla->id_talla) ?>"  required>
    <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
    <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
    <input type="hidden"  name="id_prenda_tamaño_consumo" id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>

    <?php if(!$forros){ ?>
      
      <?php foreach ($tallas as $talla):?> 
      <?php ?>
      <?php if($talla->id_tipo_talla == $Wear->tallaje && $talla->id_tipo_uso == 1):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($talla->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$talla->id_talla) ?>"><?echo($talla->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($talla->id_talla) ?>" placeholder="Metros de tela" value=0.00  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$talla->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($talla->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>
    <?php }else{ ?>
      <?php foreach ($forros as $forro):?> 
      <?php ?>
      <!-- <?php echo( $forro->id_tipo_uso." ".$forro->Nombre." ")?> -->
      <?php if($forro->id_tipo_talla == $Wear->tallaje):?>
      <input type="hidden"  name="id_tipo_talla" id="id_tipo_talla"  value="<?= htmlentities($forro->id_tipo_talla) ?>"  required>
      <input type="hidden"  name="id_prenda" id="id_talla"  value="<?= htmlentities($Wear->id_prenda) ?>"  required>
			<tr>
				<td class="d-md-table-cell d-none" style= "width: 200px;"><label name="<?php echo("metros".$forro->id_talla) ?>"><?echo($forro->Nombre)?>:</label></td>
				<td><input type="text" class="form-control" type="text"  name="<?php echo($forro->id_talla) ?>" placeholder="Metros de tela"  value="<?= htmlentities($forro->Consum) ?>"  required></td>
        <td style="display:none;">      <input type="hidden" name="<?php echo("id_prenda_tamaño_consumo".$forro->id_talla) ?>"id="id_prenda_tamaño_consumo"  value="<?= htmlentities($forro->id_prenda_tamaño_consumo) ?>"  required>
      </tr>	
      <?endif?>
    <?php endforeach?>

    <?php } ?>

		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input  id="submitApprove" type="submit"class="btn btn-primary" name="submit" value="Enviar"/>
      </div>
			</form>
    </div>
  </div>
</div>


