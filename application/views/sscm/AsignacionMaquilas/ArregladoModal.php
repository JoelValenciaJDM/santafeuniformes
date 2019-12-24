<!-- Arreglado -->
<div class="modal fade" id="revisadoregresoTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <div id="backed">
            <div class="form-row align-items-center mb-2" id="id">
              <div class="col-md-3 col-g-3 col-sm-3">
                <label>Regresados</label>
              </div>
              <div class="col-md-6 col-g-6 col-sm-6">
                <input type="text" class="form-control mb-2 cantidad" name="cantidad" id="cantidad" placeholder="Cantidad">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="startButton" type="button" class="btn btn-primary">Regresar</button>
      </div>
    </div>
  </div>
</div>