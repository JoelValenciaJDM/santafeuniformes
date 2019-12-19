<!-- unico -->
<div class="modal fade" id="pagoMaquilaTrigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignacion Maquila</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id="table" class="w-100">
        <thead>
          <tr>
            <th>No. Corte Maquila</th>
            <th>Apodo Maquila</th>
            <th>Prenda</th>
            <th>Cantidad</th>
            <th>Precio Prenda</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody id="tableModal">

      </table>

      <div class="row">
        <div class = "col-md-4 col-g-4 col-sm-4"></div>
        <div class = "col-md-4 col-g-4 col-sm-4"></div>
        <div class = "col-md-4 col-g-4 col-sm-4" id="granTotal"></div>
      </div>

      </div>
      <div class="modal-footer">
        <button id="cancelbutton" class="btn btn-secondary" >Cancelar</button>
        <button id="paybutton" type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
</div>
<!-- Multiple -->
