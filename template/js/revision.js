var id_mca;
function fModel(id_mc) {
  console.log( id_mc);
  $('#revisionTrigger').modal('show');
  id_mca = id_mc;
};

$("#button_revisado").click(function(event){

  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/nofallas',
    data:{id_mc : id_mca},
    success: function (data) {

    }
  })
    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
 
});

$("#button_reenviar").click(function(event){
  $('#revisado_fallaTrigger').modal('show');
  $('#revisionTrigger').modal('hide'); 
});

$("#startButtonMulti").click(function(event){
  let cant = cantidad = $("#cantidad").val();
  
  console.log(cant);

  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/fallas',
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