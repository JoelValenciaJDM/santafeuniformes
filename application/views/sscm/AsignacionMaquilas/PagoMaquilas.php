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
            <th>No. Corte Maquila</th>
            <th>Apodo Maquila</th>
            <th>Prenda</th>
            <th>Precio prenda</th>
            <th>Cantidad</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pagosMaquila as $pm) : ?>
            <tr id="idCort<?= $pm->id_maquila_corte ?>">
              <td><input type="checkbox" class ="selected"name="selected" value="<?= htmlentities($pm->id_maquila_corte) ?>"> </td>
              <td class="d-md-table-cell d-none id_maquila_corte" name ="id_maquila_corte"><?= htmlentities($pm->id_maquila_corte) ?></td>
              <td class="d-md-table-cell d-none apodo" name ="apodo"><?= htmlentities($pm->apodo) ?></td>
              <td class="d-md-table-cell d-none name" name ="name"><?= htmlentities($pm->name) ?></td>
              <td class="d-md-table-cell d-none precio_tipo" name ="precio_tipo"><?= htmlentities($pm->precio_tipo) ?></td>
              <td class="d-md-table-cell d-none cantidad" name ="cantidad"><?= htmlentities($pm->Cantidad) ?></td>
              <td class="d-md-table-cell d-none total" name ="total"><?= htmlentities($pm->precio_tipo * $pm->Cantidad) ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </div>
    <td>
      <button id="atras" type="button" class="btn btn-success mb-2"><i class="fa fa-eye"></i> Atras</button>
    </td>
    <td>
      <button id="pay" type="button" class="btn btn-success mb-2"><i class="fa fa-eye"></i> Pagar</button>
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
<?php $this->load->view("sscm/AsignacionMaquilas/PagoModal.php") ?>
<script src="<?php echo base_url('index.php/../template/js/pagomaquila.js') ?>"></script>