$("#ordertrackTrigger").submit(function (event) {
  event.preventDefault(); //prevent default action 
  console.log(form_data);
  $("#newTalla").prop('disabled', true);
  $("#ordertrackTrigger").modal('hide');//close the modal
  $("#fabricadoTrigger").modal('show');
  
});

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
        $("#selecttonotela").append('<option value="' + data[i].id_prenda + '">' + data[i].name + '</option>');
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
  console.log(`#id${cloneCount - 1}` + " button:last");
  document.getElementById("cantidad_tallas").value=cloneCount;
  $("#id").clone().prop("id", 'id' + cloneCount++).appendTo("#modal");
  // $(`#id${cloneCount - 1}`).append('<button type="button" class="btn btn-danger mb-2 delete" id="delete">Eliminar</button>');
  // $(`#id${cloneCount - 1}` + " .btnclss:last").after(funtion);
});

$("#deleteTalla").click(function (event) {
  // Original element with attached data
  document.getElementById("cantidad_tallas").value=cloneCount-2;
  $(`#id${cloneCount-1 }`).remove();
  console.log(`#id${cloneCount -1}`);
  if(cloneCount>2){
    cloneCount--;
  }
});
