<!-- unico -->
<div class="modal fade" id="maquilaUnicoTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignacion Maquila</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_unico">
          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Maquila</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <select id="selectmaquila" type="text" class="form-control mb-2 mr-2" type="text" name="id_maquila" required>
                <option value="0">Seleccione Una Maquila</option>
                <?php foreach ($Maquilas as $maquila) : ?>
                  <option value="<?= $maquila->id_maquila ?>"><?= $maquila->apodo ?></option>
                <?php endforeach; ?>
              </select>

            </div>
          </div>
          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Fecha de envio</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="date" class="form-control mb-2" name="Hora_inico" id="fecha_envio">

            </div>
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Fecha de entrega</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="date" class="form-control mb-2" name="Hora_final" id="fecha_regreso">
            </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="startButton" type="button" class="btn btn-primary">Empezar</button>
      </div>
    </div>
  </div>
</div>
<!-- Multiple -->
<div class="modal fade" id="maquilaDivididoTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignacion Maquila</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_asignacionMultiple">
          <input type="text" class="form-control mb-2" name="id" id="id_corte_search" hidden>
          <input type="hidden" class="form-control mb-2" name="cantidad" value="1" id="maquilas">
          <div id="asignacionMaquilas">
            <div class="form-row align-items-center mb-2" id="id">
              <div class="col-md-3 col-g-3 col-sm-3">
                <label>Maquila</label>
              </div>
              <div class="col-md-6 col-g-6 col-sm-6">
                <select id="selectmaquilaMulti" type="text" class="form-control mb-2 mr-2 selectmaquilaMulti" type="text" name="id_maquilaMulti" required>
                  <option value="0">Seleccione Una Maquila</option>
                  <?php foreach ($Maquilas as $maquila) : ?>
                    <option value="<?= $maquila->id_maquila ?>"><?= $maquila->apodo ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3 col-g-3 col-sm-3">
                <input type="number" class="form-control mb-2 cantidad" name="Hora_inico" id="cantidad" placeholder="Cantidad">
              </div>
            </div>
          </div>
          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Fecha de envio</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="date" class="form-control mb-2" name="Hora_inico" id="fecha_envioMulti">

            </div>
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Fecha de entrega</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="date" class="form-control mb-2" name="Hora_final" id="fecha_regresoMulti">
            </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="startButtonMulti" type="button" class="btn btn-primary">Empezar</button>
        <button id="addMaquila" type="button" class="btn btn-success">+ Maquila</button>
      </div>
    </div>
  </div>
</div>