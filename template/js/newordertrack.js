$("#ordertrackTrigger").submit(function (event) {
  event.preventDefault(); //prevent default action 
  console.log(form_data);
  $("#newTalla").prop('disabled', true);
  $("#fabricadoTrigger").modal('show');
  $("#ordertrackTrigger").modal('hide');//close the modal

});
function selectcustomerbutton(id) {
  $('#customer').val($('#id' + id + ' .name').text());
  $('#id_customer').val(id);
  $('#customersTrigger').modal('hide');
}

$('#selecttipoprenda').on('change', function () {
  var id = $('#selecttipoprenda').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getPrendasAjax',
    dataType: "json",
    data: { 'id': id },
    success: function (data) {
      $("#selectprenda").empty();
      console.log(data);
      $("#selectprenda").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selectprenda").append('<option value="' + data[i].id_prenda + '">' + data[i].name + '</option>');
      }
    }
  })
    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});

$('#selectcolortela').on('change', function () {
  var id_color = $('#selectcolortela').val();
  var id_tela = $('#selecttela').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getTonosAjax',
    dataType: "json",
    data: {
      'id_color': id_color,
      "id_tela": id_tela
    },
    success: function (data) {
      $("#selecttonotela").empty();
      console.log(data);
      $("#selecttonotela").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selecttonotela").append('<option value="' + data[i].id_tono + '">' + data[i].name + '</option>');
      }
    }
  })

    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});



$('#selectprenda').on('change', function () {
  var id = $('#selectprenda').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getTallasAjax',
    dataType: "json",
    data: { 'id_prenda': id },
    success: function (data) {
      $("#selecttallas").empty();
      console.log(data);
      $("#newTalla").prop('disabled', false);
      $("#selecttallas").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selecttallas").append('<option value="' + data[i].id_talla + '">' + data[i].Nombre + '</option>');
      }
    }
  })

    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});

var cloneCount = 2
// var delete = $(#id){}
$("#newTalla").click(function (event) {
  // Original element with attached data
  // $("#newTalla").remove();
  console.log(`#idf${cloneCount - 1}` + " button:last");
  document.getElementById("cantidad_tallas").value=cloneCount;
  $("#id").clone().prop("id", 'idf' + cloneCount++).appendTo("#modalFabrica");
  // $(`#idf${cloneCount - 1}`).append('<button type="button" class="btn btn-danger mb-2 delete" id="delete">Eliminar</button>');
  // $(`#idf${cloneCount - 1}` + " .btnclss:last").after(funtion);
});

$("#deleteTalla").click(function (event) {
  // Original element with attached data
  document.getElementById("cantidad_tallas").value=cloneCount-2;
  $(`#idf${cloneCount-1 }`).remove();
  console.log(`#idf${cloneCount -1}`);
  if(cloneCount>2){
    cloneCount--;
  }
});

$('#selecttipoprendacompra').on('change', function () {
  let id = $('#selecttipoprendacompra').val();
  console.log(id);
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getPrendasCompraAjax',
    dataType: "json",
    data: { 'id': id },
    success: function (data) {
      $("#selectprendacompra").empty();
      console.log(data);
      $("#selectprendacompra").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selectprendacompra").append('<option value="' + data[i].id_prenda + '">' + data[i].name + '</option>');
      }
    }
  })
    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});

$('#selectcolortelacompra').on('change', function () {
  var id_color = $('#selectcolortelacompra').val();
  var id_tela = $('#selecttelacompra').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getTonosAjax',
    dataType: "json",
    data: {
      'id_color': id_color,
      "id_tela": id_tela
    },
    success: function (data) {
      $("#selecttonotelacompra").empty();
      console.log(data);
      $("#selecttonotelacompra").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selecttonotelacompra").append('<option value="' + data[i].id_prenda + '">' + data[i].name + '</option>');
      }
    }
  })

    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});



$('#selectprendacompra').on('change', function () {
  var id = $('#selectprendacompra').val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajax/getTallasAjax',
    dataType: "json",
    data: { 'id_prenda': id },
    success: function (data) {
      $("#selecttallascompra").empty();
      console.log(data);
      $("#newTallacompra").prop('disabled', false);
      $("#selecttallascompra").append('<option value="0">Elige una opcion</option>');
      for (let i = 0; i < data.length; i++) {
        console.log(i);
        $("#selecttallascompra").append('<option value="' + data[i].id_talla + '">' + data[i].Nombre + '</option>');
      }
    }
  })

    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
});

var cloneCountcompra = 2
$("#newTallacompra").click(function (event) {
  console.log(`#idcompra${cloneCountcompra}` + " button:last");
  document.getElementById("cantidad_tallascompra").value = cloneCountcompra;
  $("#idcompra").clone().prop("id", 'idcompra' + cloneCountcompra++).appendTo("#modalcompra");
});

$("#deleteTallacompra").click(function (event) {
  // Original element with attached data
  document.getElementById("cantidad_tallascompra").value = cloneCountcompra - 2;
  $(`#idcompra${cloneCountcompra - 1}`).remove();
  console.log(`#idcompra${cloneCountcompra - 1}`);
  if (cloneCountcompra > 2) {
    cloneCountcompra--;
  }

});


