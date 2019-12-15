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
            <th>No. Corte</th>
            <th>Maquila</th>
            <th>Cantidad</th>
            <th>Entregados</th>
            <th>Pendientes</th>
            <th>Fecha envio</th>
            <th>Fecha regreso</th>
            <th>Fecha actualizacion</th>
            <th>Fecha ultima entrega</th>
            <th>Detalles</th>


          </tr>
        </thead>
        <tbody>
          <?php foreach ($MaquilaEntregas as $mc) : ?>
            <tr id="idCort<?= $mc->id_maquila_corte ?>">
              <td class="d-md-table-cell d-none"><?= htmlentities($mc->id_maquila_corte . $mc->id_corte_prenda_pedido) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($mc->apodo) ?></td>
              <td class="d-md-table-cell d-none cantidad" name="cantidad"><?= htmlentities($mc->Cantidad) ?></td>
              <td class="d-md-table-cell d-none engregadas" name="engregadas"><?= htmlentities($mc->Entregas) ?></td>
              <td class="d-md-table-cell d-none pendientes" name="pendientes"><?= htmlentities($mc->Cantidad-$mc->Entregas) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($mc->Fecha_envio) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($mc->Fecha_tentativa_regreso) ?></td>
              <td class="d-md-table-cell d-none fecha_actualizacion_entrega" name="fecha_actualizacion_entrega"><?= htmlentities($mc->Fecha_actualizacion_entrega) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($mc->Fecha_enrtrega) ?></td>
              <td>
								<button onclick="mcModel(<?= htmlentities($mc->id_corte_prenda_pedido) ?>,<?= htmlentities($mc->id_maquila_corte)?>)" class="btn btn-success"><i class="fa fa-eye"></i> Recepción</button>
							</td>
            </tr>
          <?php endforeach; ?>
      </table>
    </div>


  </div>
  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        "pagingType": "full_numbers"
      });
    });
  </script>
</body>
<?php $this->load->view("sscm/AsignacionMaquilas/DevolucionModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/Devolucion.js') ?>"></script>