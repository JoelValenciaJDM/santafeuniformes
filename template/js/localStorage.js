$(document).ready(function () {
  var arrayPedido = [];
  var idCounter = 0;
  var idCounterCompra = 0;

  $("#savePrendaData").click(function (event) {
    let tallas = [];
    let talla1 = {
      id_talla: $('#id .selecttallas').val(),
      name_talla: $('#id .selecttallas').children("option:selected").text(),
      cantidad: $('#id .cantidad_prendas').val()
    }
    tallas.push(talla1);
    for (let i = 2; i <= $('#cantidad_tallas').val(); i++) {
      // console.log(`#idf${i}`+'.selecttallas');
      let talla = {
        id_talla: $(`#idf${i}` + ' .selecttallas').val(),
        name_talla: $(`#idf${i}` + ' .selecttallas').children("option:selected").text(),
        cantidad: $(`#idf${i}` + ' .cantidad_prendas').val()
      }
      tallas.push(talla);
    }
    // console.log(tallas);
    let datos =
    {
      tipo: $('#tipo').val(),
      categoria: $('#selecttipoprenda').children("option:selected").val(),
      id_prenda: $('#selectprenda').val(),
      name_prenda: $('#selectprenda').children("option:selected").text(),
      id_tela: $('#selecttela').val(),
      name_tela: $('#selecttela').children("option:selected").text(),
      color: $('#selectcolortela').val(),
      name_color: $('#selectcolortela').children("option:selected").text(),
      colortela: $('#selecttonotela').val(),
      name_colortela: $('#selecttonotela').children("option:selected").text(),
      bordado: $('#bordado').val(),
      impresion: $('#cerigrafia').val(),
      tallas: tallas
    };
    for (let i = 0; i < tallas.length; i++) {
      let tallasCantidad = datos['tallas'][i];
      $("#hrpedido").append('<div id="hrid' + idCounter + '" class="form-row align-items-center mb-2 ">');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 id_prenda">');
      $("#hrid" + idCounter + " .id_prenda").append('<label class="" for="date_delivery">' + datos['id_prenda'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 prenda">');
      $("#hrid" + idCounter + " .prenda").append('<label class="" for="date_ingres">' + datos['name_prenda'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 talla">');
      $("#hrid" + idCounter + " .talla").append('<label class="" for="date_delivery">' + tallasCantidad['name_talla'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 tela">');
      $("#hrid" + idCounter + " .tela").append('<label class="" for="date_delivery">' + datos['name_tela'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 color">');
      $("#hrid" + idCounter + " .color").append('<label class="" for="date_delivery">' + datos['name_color'] + ' ' + datos['name_colortela'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 cantidad">');
      $("#hrid" + idCounter + " .cantidad").append('<label class="" for="date_delivery">' + tallasCantidad['cantidad'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrpedido").append('</div>');
      idCounter++;
    }
    arrayPedido.push(datos);
    // console.log(arrayPedido);
    $("#fabricadoTrigger").modal('hide');
    $('#modalFabrica').trigger('reset');
  });

  $("#savePrendaDataCompra").click(function (event) {
    let tallas = [];
    let talla1 = {
      id_talla: $('#idcompra .selecttallas').val(),
      name_talla: $('#idcompra .selecttallas').children("option:selected").text(),
      cantidad: $('#idcompra .cantidad_prendas').val()
    }
    tallas.push(talla1);
    for (let i = 2; i <= $('#cantidad_tallascompra').val(); i++) {
      // console.log(`#idcompra${i}`+'.select');
      let talla = {
        id_talla: $(`#idcompra${i}` + ' .selecttallas').val(),
        name_talla: $(`#idcompra${i}` + ' .selecttallas').children("option:selected").text(),
        cantidad: $(`#idcompra${i}` + ' .cantidad_prendas').val()
      }
      tallas.push(talla);
    }
    // console.log(tallas);
    let datos =
    {
      tipo: $('#tipo').val(),
      categoria: $('#selecttipoprendacompra').children("option:selected").val(),
      id_prenda: $('#selectprendacompra').val(),
      name_prenda: $('#selectprendacompra').children("option:selected").text(),
      id_tela: $('#selecttelacompra').val(),
      name_tela: $('#selecttelacompra').children("option:selected").text(),
      color: $('#selectcolortelacompra').val(),
      name_color: $('#selectcolortelacompra').children("option:selected").text(),
      colortela: $('#selecttonotelacompra').val(),
      name_colortela: $('#selecttonotelacompra').children("option:selected").text(),
      bordado: $('#bordadocompra').val(),
      impresion: $('#cerigrafiacompra').val(),
      tallas: tallas
    };
    for (let i = 0; i < tallas.length; i++) {
      let tallasCantidad = datos['tallas'][i];
      $("#hrpedido").append('<div id="hrid' + idCounter + '" class="form-row align-items-center mb-2 ">');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 id_prenda">');
      $("#hrid" + idCounter + " .id_prenda").append('<label class="" for="date_delivery">' + datos['id_prenda'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 prenda">');
      $("#hrid" + idCounter + " .prenda").append('<label class="" for="date_ingres">' + datos['name_prenda'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 talla">');
      $("#hrid" + idCounter + " .talla").append('<label class="" for="date_delivery">' + tallasCantidad['name_talla'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 tela">');
      $("#hrid" + idCounter + " .tela").append('<label class="" for="date_delivery">' + datos['name_tela'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 color">');
      $("#hrid" + idCounter + " .color").append('<label class="" for="date_delivery">' + datos['name_color'] + ' ' + datos['name_colortela'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrid" + idCounter).append('<div class="col-md-2 col-g-2 col-sm-2 cantidad">');
      $("#hrid" + idCounter + " .cantidad").append('<label class="" for="date_delivery">' + tallasCantidad['cantidad'] + '</label>');
      $("#hrid" + idCounter).append('</div>');
      $("#hrpedido").append('</div>');
      idCounter++;
    }
    arrayPedido.push(datos);
    // console.log(arrayPedido);
    $("#compradoTrigger").modal('hide');
    $('#modalCompra').trigger('reset');
  });

  $('#submitData').click(function(event){
    let pedidoData = {
      date_ingres: $('#date_ingres').val(),
      date_delivery: $('#date_delivery').val(),
      id_customer: $('#id_customer').val(),
      id_vendedor: $('#id_vendedor').val(),
      data: arrayPedido
    }
    console.log(JSON.stringify(pedidoData));
    event.preventDefault(); //prevent default action 
   
    $.ajax({
      url : 'http://localhost/santafeuniformes/index.php/Ajax/sendDataPedido',
      type: 'POST',
      dataType: "json",
          data : {data: JSON.stringify(pedidoData)},
          success: () => {
              alertify.success("Se hicieron los cambios");
              
          }
          
    }).done(function(response){ //
      
      // $("#server-results").html(response);
    });
    
    console.log(pedidoData);
  });

});
