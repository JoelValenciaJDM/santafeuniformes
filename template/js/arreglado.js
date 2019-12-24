var id_mca;
function fModel(id_mc) {
  console.log(id_mc);
  $('#revisadoregresoTrigger').modal('show');
  id_mca = id_mc;
};

$("#startButton").click(function (event) {
  console.log($("#cantidad").val());
  let cant = $("#cantidad").val();

  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/arregladas',
    data:{id_mc : id_mca,
      cantidad : cant
    },
    success: function (data) {
      $('#revisado_fallaTrigger').modal('hide');
    }
  }).fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    });

});