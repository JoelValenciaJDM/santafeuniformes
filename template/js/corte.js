var cont = 0;
function selectpedidoprenda(id) {
  var text;
  var idPrendaPedido = $("#id" + id + " .idCompuesto").each(function () {
    text = $(this).text();
  });
  console.log(text);
  $.ajax({
    url: 'http://localhost/santafeuniformes/index.php/AjaxCorte/SendCorte',
    type: 'POST',
    async: true,
    dataType: "json",
    data: {
      id_pedido: id,
      id_compuesto: text
    },
    success: function (data) {
      $("#selectprenda").empty();
      console.log(data['tipo']);

      if (data['tipo'] == 1) {
        alertify
          .alert("No hay sufuciente " + data['tela'] + " color " + data['color'] + " " + data['tono'] + " se necesitan " + data['cantidad'] + " metros", function () {
            alertify.message('OK');
          });
        alertify.success("Se hicieron los cambios");
      } else {
        console.log("Contador " + cont);
        $("#corteTrigger").modal('show');
        $('#corteButton').click(function (even) {
          event.preventDefault();
          let date = document.getElementById('date').value;
          cont++;
          console.log(cont);

          var data2 = {
            id: data['id'],
            date: date,
            ppt: data['id_prenda_pedido']
          }

          console.log(data2);
          $.ajax({
            url: 'http://localhost/santafeuniformes/index.php/AjaxCorte/createCorte',
            type: 'POST',
            dataType: "json",
            data: data2,
            success: function (data2) {
              console.log(data2);
              console.log('holiS');


            }


          }).done(function (response) { //      
            // $("#server-results").html(response);
          });
          $("#corteTrigger").modal('hide');
          console.log("#id" + id);
          console.log[data];
          delete data;
          $("#id" + id).remove();
          location.reload();


        });
      }
      return false;

    }


  }).done(function (response) { //

    // $("#server-results").html(response);
  });
}

function corteModel(id) {
  $("#id_corte_search").val(id);
  $('#corteTrigger').modal('show');

}

$('#satartButton').click(function (event) {
  let data = {
    id_corte: $("#id_corte_search").val(),
    id_rollo: $('#id_rollo').val(),
    Capas: $('#Capas').val(),
    Hora_inico: $('#Hora_inico').val()
  }

  $.ajax({
    url: 'http://localhost/santafeuniformes/index.php/AjaxCorte/cutstart',
    type: 'POST',
    dataType: "json",
    data: data,
    success: function (data) {
      console.log(data);
      console.log('holiS');
    }
  }).done(function (response) { //      
    // $("#server-results").html(response);
  });
  console.log(data);
});

$('#endButton').click(function (even) {


  $.ajax({
    url: 'http://localhost/santafeuniformes/index.php/AjaxCorte/cutend',
    type: 'POST',
    data: {
      id_corte: $("#id_corte_search").val(),
      Hora_final: $('#Hora_final').val()
    },
    success: function () {
      let id_corte = $("#id_corte_search").val();
      console.log('holiS');
      $("#idCort" + id_corte).remove();
      $("#corteTrigger").modal('hide');
      $("#form_corte").trigger('reset');



    }
  }).done(function (response) { //      
    // $("#server-results").html(response);
  });


});

