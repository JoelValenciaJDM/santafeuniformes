<!-- Completado? -->
<div class="modal fade" id="revisionTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Revision</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart(base_url("index.php/sscm/Customer/create")); ?>
        <div class="form-row align-items-center mb-2">

          <div class="col-md-6 col-g-6 col-sm-6">
            <button type="button" class="btn btn-info mb-2" style="width:100%;" id="button_revisado">Completo</button>
          </div>
          <div class="col-md-6 col-g-6 col-sm-6">
            <button type="button" class="btn btn-info mb-2" style="width:100%;" id="button_reenviar">Fallas</button>
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


<!-- Multiple -->
<div class="modal fade" id="revisado_fallaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <div id="fallos">
            <div class="form-row align-items-center mb-2" id="id">
              <div class="col-md-3 col-g-3 col-sm-3">
                <label>Fallos</label>
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
        <button id="startButtonMulti" type="button" class="btn btn-primary">Regresar</button>
      </div>
    </div>
  </div>
</div>