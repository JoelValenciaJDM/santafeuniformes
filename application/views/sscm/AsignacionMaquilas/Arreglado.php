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
            <th>Falladas</th>
            <th>Agrreglados</th>
            <th>Faltantes</th>
            <th>Fecha envio</th>
            <th>Prenda</th>
            <th>Opciones</th>


          </tr>
        </thead>
        <tbody>
          <?php foreach ($arreglados as $f) : ?>
            <tr id="idCort<?= $f->id_maquila_corte ?>">
              <td class="d-md-table-cell d-none"><?= htmlentities($f->id_maquila_corte . $f->id_corte_prenda_pedido) ?></td>
              <td class="d-md-table-cell d-none"><?= htmlentities($f->apodo) ?></td>
              <td class="d-md-table-cell d-none cantidad" name="cantidad"><?= htmlentities($f->fallas) ?></td>
              <td class="d-md-table-cell d-none cantidad" name="cantidad"><?= htmlentities($f->regresadas) ?></td>
              <td class="d-md-table-cell d-none engregadas" name="engregadas"><?= htmlentities($f->send_date) ?></td>
              <td class="d-md-table-cell d-none">-</td>
              <td class="d-md-table-cell d-none">-</td>
              <td>
								<button onclick="fModel(<?= htmlentities($f->id_maquila_corte) ?>)" class="btn btn-success"><i class="fa fa-eye"></i>Revision</button>
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
<?php $this->load->view("sscm/AsignacionMaquilas/ArregladoModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/arreglado.js') ?>"></script>