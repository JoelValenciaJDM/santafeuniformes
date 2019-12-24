<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
  <title>Santa Fe SSCM</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="../template/css/sscm/login.css">
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Iniciar Sesión</h3>
        </div>
        <div class="card-body">
          <form action="<?= base_url("/index.php/sscm/Login") ?>" method="POST">
          <div id="backed">
              <div class="form-row align-items-center mb-2" id="id">
                <div class="col-md-4 col-g-4 col-sm-4">
                  <label>Folio</label>
                </div>
                <div class="col-md-8 col-g-8 col-sm-8">
                  <input type="text" class="form-control mb-2 id_pedido" name="id_pedido" id="id_pedido" placeholder="Folio">
                </div>
              </div>
              <div class="form-row align-items-center mb-2" id="id">
                <div class="col-md-4 col-g-4 col-sm-4">
                  <label>Actualizacion</label>
                </div>
                <div class="col-md-8 col-g-8 col-sm-8">
                  <input type="text" class="form-control mb-2 Fecha_update" name="Fecha_update" id="Fecha_update" placeholder="Actualizacion">
                </div>
              </div>
              <div class="form-row align-items-center mb-2" id="id">
                <div class="col-md-4 col-g-4 col-sm-4">
                  <label>Estatus</label>
                </div>
                <div class="col-md-8 col-g-8 col-sm-8">
                  <input type="text" class="form-control mb-2 Estatus" name="Estatus" id="Estatus" placeholder="Estatus">
                </div>
              </div>
              <div class="form-row align-items-center mb-2" id="id">
                <div class="col-md-4 col-g-4 col-sm-4">
                  <label></label>
                </div>
                <div class="col-md-8 col-g-8 col-sm-8">
                  <button type="button" class="btn btn-info mb-2" style="width:100%;" id="consulta_button">Consultar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
</body>
<script src="<?php echo base_url('index.php/../template/js/seguimiento.js') ?>"></script>

</html>