function mcModel(id_cpp, id_cm) {
  console.log("holi " + id_cpp + " " + id_cm);
  $('#devolucionTrigger').modal('show');
  $('#id_cm').val(id_cm);
  $('#id_cpp').val(id_cpp);

};

$('#saveButton').click(function (even) {
  let total = parseInt($('#cantidad').val()) + parseInt($('#idCort' + $('#id_cm').val() + ' .engregadas').html());
  console.log($('#idCort' + $('#id_cm').val() + ' .engregadas').html());
  console.log(total);
  let data = {
    'id_maquila_corte': $('#id_cm').val(),
    'id_corte_prenda_pedido': $('#id_cpp').val(),
    'Entregas': total,
    'Fecha_actualizacion_entrega': $('#fecha_regreso').val()
  }

  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/devolucion',
    data: data,
    success: function () {
      $('#idCort' + $('#id_cm').val() + ' .fecha_actualizacion_entrega').html(data['Fecha_actualizacion_entrega']);
      $('#idCort' + $('#id_cm').val() + ' .engregadas').html(data['Entregas']);
      let pendientes = parseInt($('#idCort' + $('#id_cm').val() + ' .cantidad').html()) - data['Entregas'];

      if (pendientes <= 0) {
        $('#idCort' + $('#id_cm').val()).remove();
        $.ajax({
          type: 'POST',
          url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/devolucionEnd',
          data: {'id_maquila_corte':data['id_maquila_corte'],
                  'Fecha_entrega': data['Fecha_actualizacion_entrega']},
          success: function () {

          }
        })
          .fail(function () {
            alert('Error')

          });




      } else {
        $('#idCort' + $('#id_cm').val() + ' .pendientes').html(pendientes);
      }

      $('#form_devolucion').trigger('reset');
      $('#devolucionTrigger').modal('hide');

    }
  })
    .fail(function () {
      alert('Error')

    });

});

