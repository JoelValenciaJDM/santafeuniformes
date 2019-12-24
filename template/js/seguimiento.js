$("#consulta_button").click(function(event){
  let id_pedido = $("#id_pedido").val();
  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/Ajaxseguimiento/consulta',
    dataType: "json",
    data:{id_pedido : id_pedido
    },
    success: function (data) {
      console.log(data);
      $('#Fecha_update').val(data[0].Fecha_update);
      $('#Estatus').val(data[0].Estatus);
    }
  }).fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    });

});