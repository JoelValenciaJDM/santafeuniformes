<?php $this->load->view("sscm/base/headerpag2.php") ?>

<body>



  <div class="container">
    <h2>AsignacionMaquila</h2>
    <?php if (!empty($error)) : ?>
      <p class="alert alert-danger"><?= htmlentities($error) ?></p>
    <?php endif; ?>
    <div class="row">

    </div>
    <div class="card p-4">
      <table id="table" class="w-100">
        <thead>
          <tr>
            <th>Select</th>
            <th>No. Corte</th>
            <th>Prenda</th>
            <th>Tela</th>
            <th>Color</th>
            <th>Tono</th>
            <th>Talla</th>
            <th>Cantidad</th>


          </tr>
        </thead>
        <tbody>
          <?php foreach ($Cortes as $corte) : ?>
            <tr id="idCort<?= $corte->id_corte_prenda_pedido ?>">
              <td><input type="checkbox" name="selected" value="<?= htmlentities($corte->id_corte_prenda_pedido) ?>"> </td>
              <td class="d-md-table-cell d-none" id="id_corte<?= htmlentities($corte->id_corte_prenda_pedido) ?>"><?= htmlentities($corte->id_corte) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($corte->prenda . " " . $corte->prenda_name) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($corte->tela) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($corte->color) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($corte->tono) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($corte->talla) ?></td>
              <td class="d-md-table-cell d-none" id = "cantidad<?= htmlentities($corte->id_corte_prenda_pedido) ?>"><?= htmlentities($corte->cantidad) ?></td>
              <!-- <td>
								<button onclick="corteModel(<?= htmlentities($corte->id_corte) ?>)" class="btn btn-success"><i class="fa fa-eye"></i> Cortar</button>
							</td> -->
            </tr>
          <?php endforeach; ?>
      </table>
    </div>
    <td>
      <button id="buttonMaquilaUnico" type="button" class="btn btn-success mb-2" ><i class="fa fa-eye"></i> Envio Unico</button>
    </td>
    <td>
      <button id="buttonMaquilaMulti" class="btn btn-success  mb-2"><i class="fa fa-eye"></i> Envio Dividido </button>
    </td>

  </div>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        "pagingType": "full_numbers"
      });
    });
  </script>
</body>
<?php $this->load->view("sscm/AsignacionMaquilas/AsignacionModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/Asignacion.js') ?>"></script>