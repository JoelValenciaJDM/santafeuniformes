<div class="modal fade" id="corteTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Programar Corte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_corte">
          <input type="text" class="form-control mb-2" name="id" id="id_corte_search" hidden>

          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>No. Rollo</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="text" class="form-control mb-2" name="id_rollo" id="id_rollo">

            </div>
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Capas</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="number" class="form-control mb-2" name="Capas" id="Capas">

            </div>
          </div>
          <div class="form-row align-items-center mb-2">
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Hora de inicio</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="time" class="form-control mb-2" name="Hora_inico" id="Hora_inico">

            </div>
            <div class="col-md-3 col-g-3 col-sm-3">
              <label>Hora de final</label>
            </div>
            <div class="col-md-9 col-g-9 col-sm-9">
              <input type="time" class="form-control mb-2" name="Hora_final" id="Hora_final">
            </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="satartButton" type="button" class="btn btn-primary">Empezar</button>
        <button id="endButton" type="button" class="btn btn-primary">Terminar</button>

      </div>
    </div>
  </div>
</div>