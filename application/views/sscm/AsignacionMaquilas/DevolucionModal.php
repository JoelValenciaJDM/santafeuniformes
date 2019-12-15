<!-- Devolucion -->
<div class="modal fade" id="devolucionTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prendas Entregadas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_devolucion">
          <input hidden type="text" class="form-control mb-2" name="id_cm" id="id_cm">
          <input hidden type="text" class="form-control mb-2" name="id_cpp" id="id_cpp">

          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Entregados</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="number" class="form-control mb-2" name="Hora_inico" id="cantidad">

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
        <button id="saveButton" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>