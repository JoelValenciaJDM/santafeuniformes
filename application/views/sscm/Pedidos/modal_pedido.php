<!-- Modal order type -->
<div class="modal" id="ordertrackTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ml-20" style="width:800px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tipo de pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart(base_url("index.php/sscm/Customer/create")); ?>
        <div class="form-row align-items-center mb-2">

          <div class="col-md-4 col-g-4 col-sm-4">
            <button type="button" class="btn btn-info mb-2" style="width:100%;" data-backdrop="false" data-toggle="modal" data-target="#fabricadoTrigger">Fabricado</button>
          </div>
          <div class="col-md-4 col-g-4 col-sm-4">
            <button type="button" class="btn btn-info mb-2" style="width:100%;" data-backdrop="false" data-toggle="modal" data-target="#compradoTrigger">Comprado</button>
          </div>
          <div class="col-md-4 col-g-4 col-sm-4">
            <button type="button" class="btn btn-info mb-2" style="width:100%;" data-backdrop="false" data-toggle="modal" data-target="#traidoTrigger">Traído por el cliente</button>
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal fabricado -->
<div class="modal" id="fabricadoTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ml-200" style="width:800px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tipo de pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart(base_url("index.php/sscm/Customer/create"), 'id="modal"'); ?>
        <div class="form-row align-items-center  ml-2">
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Categoría</label>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Prenda</label>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Tela</label>
          </div>
        </div>

        <input type="hidden" class="form-control mb-2" name="tipo" value="1" id="tipo">
        <div class="form-row align-items-center mb-2">
          <div class="col-md-3 col-g-3 col-sm-3">
            <select id="selecttipoprenda" type="text" class="form-control mb-2 mr-2" type="text" name="id_tipo_prenda" required>
              <option value="0">Seleccione una categoría</option>
              <?php foreach ($tipoprendas as $tipoprenda) : ?>
                <option value="<?= $tipoprenda->id_tipo_prenda ?>"><?= $tipoprenda->name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <select id="selectprenda" type="text" class="form-control mb-2" type="text" name="id_prenda" required>
              <option value="0">Seleccine la prenda</option>
            </select>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <select id="selecttela" type="text" class="form-control mb-2 mr-2" type="text" name="id_tela" required>
              <option value="0">Seleccione una tela</option>
              <?php foreach ($tipotelas as $tipotela) : ?>
                <option value="<?= $tipotela->id_tela ?>"><?= $tipotela->Nombre ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-row align-items-center mb-2">
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Color</label>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Tono</label>
          </div>
        </div>
        <div class="form-row align-items-center mb-2">
          <div class="col-md-3 col-g-3 col-sm-3">
            <select id="selectcolortela" type="text" class="form-control mb-2" type="text" name="id_tipo_prenda" required>
              <option value="0">Color</option>
              <?php foreach ($colors as $color) : ?>
                <option value="<?= $color->id_color ?>"><?= $color->name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div  class="col-md-3 col-g-3 col-sm-3 ml-3">
            <select id="selecttonotela" type="text" class="form-control mb-2" type="text" name="id_tipo_prenda" required>
              <option value="0" id="id_color">Tono</option>
            </select>
          </div>
          <div class="col-md-1 col-g-1 col-sm-1">
            <input type="checkbox" id="bordado" value="1"> <label for=" bordado  ">bordado</label>
          </div>
          <div class="col-md-1 col-g-1 col-sm-1">
            <input type="checkbox" id="cerigrafia" value="1"> <label for=" cerigrafia">cerigrafia</label>
          </div>
        </div>
        <hr>
        <h4>Tallas y cantidad</h4>
        <div class="form-row align-items-center mb-2" id="talla">
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Talla</label>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <label>Cantidad</label>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <button type="button" class="btn btn-secondary mb-2" id="newTalla">Agregar otra talla</button>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <button type="button" class="btn btn-danger mb-2" id="deleteTalla">Eliminar talla</button>
          </div>
        </div>
        <input type="hidden" class="form-control mb-2" name="cantidad" value="1" id="cantidad_tallas">
        <div class="form-row align-items-center mb-2 " id="id">
          <div class="col-md-3 col-g-3 col-sm-3">
            <select id="selecttallas" type="text" class="form-control mb-2 selecttallas" type="text" name="id_tipo_prenda" required>
              <option value="0">Talla</option>
            </select>
          </div>
          <div class="col-md-3 col-g-3 col-sm-3">
            <input type="number" class="form-control mb-2 cantidad_prendas" name="cantidad" min="1" id="cantidad_prendas">
          </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input id="savePrendaData" type="submit" class="btn btn-primary" name="submit" value="Enviar" />
      </div>
    </div>
  </div>
</div>