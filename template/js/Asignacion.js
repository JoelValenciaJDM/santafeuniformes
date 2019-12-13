$("#buttonMaquilaUnico").click(function (event) {
  $("#maquilaUnicoTrigger").modal('show')
});

$("#buttonMaquilaMulti").click(function (event) {
  $("#maquilaDivididoTrigger").modal('show');
  for (let i = 2; i <= $('#maquilas').val(); i++) {
    console.log(`#idf{i}` + '.select');
    $(`#idf${i}`).remove();
  }
  $('#form_asignacionMultiple').trigger('reset');
});



var cloneCount = 2
$('#addMaquila').on('click', function () {
  console.log(`#idf${cloneCount - 1}` + " button:last");
  document.getElementById("maquilas").value = cloneCount;
  $("#id").clone().prop("id", 'idf' + cloneCount++).appendTo("#asignacionMaquilas");
});

$('#startButton').on('click', function () {
  let selected = new Array();
  let cantidad = new Array();
  let ids_corte = new Array();

  $("input:checkbox[name=selected]:checked").each(function () {
    selected.push($(this).val());
    cantidad.push($('#cantidad' + $(this).val()).html());
    ids_corte.push($('#id_corte' + $(this).val()).html());
    console.log('#cantidad' + $(this).val());
  });

  console.log(selected);
  console.log(cantidad);
  let id_corte = ids_corte[0];
  console.log(id_corte);

  let data = {
    'id_maquila': $('#selectmaquila').val(),
    'Fecha_envio': $('#fecha_envio').val(),
    'Fecha_tentativa_regreso': $('#fecha_regreso').val(),
    'selected': selected,
    'cantidad': cantidad,
    'id_corte':id_corte
  }
  console.log(data);
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/ajaxcpp',
    data: data,
    success: function () {
      for (let i = 0; i < selected.length; i++) {
        $("#idCort" + selected[i]).remove();

      }

    }
  })
    .fail(function () {
      alert('Error')

    });
  $("#maquilaUnicoTrigger").modal('hide');
  $('#form_unico').trigger('reset');
});

$('#startButtonMulti').on('click', function () {
  let maquilas = [];
  let maquila1 = {
    id_maquila: $('#id .selectmaquilaMulti').val(),
    cantidad: $('#id .cantidad').val()
  }

  let selected;
  let cantidad = new Array();
    let id_corte;

  $("input:checkbox[name=selected]:checked").each(function () {
    selected = $(this).val();
    id_corte = $('#id_corte' + $(this).val()).html();
  });

  console.log(maquila1);
  maquilas.push(maquila1);
  for (let i = 2; i <= $('#maquilas').val(); i++) {
    console.log(`#idf{i}` + '.select');
    let maquila = {
      id_maquila: $(`#idf${i}` + ' .selectmaquilaMulti').val(),
      cantidad: $(`#idf${i}` + ' .cantidad').val()
    }
    maquilas.push(maquila);
  }

  let data = {
    'maquila': maquilas,
    'Fecha_envio': $('#fecha_envioMulti').val(),
    'Fecha_tentativa_regreso': $('#fecha_regresoMulti').val(),
    'selected': selected,
    'id_corte':id_corte
  }

  console.log(data);
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/ajaxcppMulti',
    data: data,
    success: function () {
      $("#idCort" + selected).remove();
    }
  })
    .fail(function () {
      alert('Error')

    });
    for (let i = 2; i <= $('#maquilas').val(); i++) {
      console.log(`#idf{i}` + '.select');
      $(`#idf${i}`).remove();
    }
    $("#maquilaDivididoTrigger").modal('hide');
    $('#form_asignacionMultiple').trigger('reset');
});