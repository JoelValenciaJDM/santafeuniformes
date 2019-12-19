var granTotal = 0;
$("#pay").click(function (event){
  granTotal = 0;
  let selected = new Array();
  $("input:checkbox[name=selected]:checked").each(function () {
    selected.push($(this).val());
  });
  for (let i = 0; i < selected.length; i++) {
    // let id = "idCort"+selected[i];
    // $("#idCort" + selected[i] ).clone().attr('id', 'idModal' +selected[i]).appendTo("#tableModal");
    // console.log('idModal' +selected[i] +'.selected');
    // $('#idModal' +selected[i] +' .selected').remove();
    let a = `<tr id="idModal`+[i]+`">
             <td class="d-md-table-cell d-none" name ="id_maquila_corte">`+$("#idCort"+selected[i] + ' .id_maquila_corte').html()+`</td>
             <td class="d-md-table-cell d-none" name ="apodo">`+$("#idCort"+selected[i] + ' .apodo').html()+`</td>
             <td class="d-md-table-cell d-none" name ="name">`+$("#idCort"+selected[i] + ' .name').html()+`</td>
             <td class="d-md-table-cell d-none" name ="precio_tipo">`+$("#idCort"+selected[i] + ' .precio_tipo').html()+`</td>
             <td class="d-md-table-cell d-none" name ="cantidad">`+$("#idCort"+selected[i] + ' .cantidad').html()+`</td>
             <td class="d-md-table-cell d-none" name ="total">`+'$'+$("#idCort"+selected[i] + ' .total').html()+`</td>
             </tr>`
    granTotal = granTotal + Number($("#idCort"+selected[i] + ' .total').html());
    $("#tableModal").append(a);

    
  }
  $("#granTotal").append("Total a pagar: "+granTotal);

  console.log(granTotal);



  console.log(selected);
  $("#pagoMaquilaTrigger").modal('show');
});

$("#paybutton").click(function (event){

  let pagos = new Array(); 
  let selected = new Array();
  var maquila;
  console.log("holi");
  $("input:checkbox[name=selected]:checked").each(function () {
    selected.push($(this).val());
  });
  for (let i = 0; i < selected.length; i++) {
    let pag = {'id_maquila_corte':$("#idCort"+selected[i] + ' .id_maquila_corte').html(),
             'name':$("#idCort"+selected[i] + ' .name').html(),
             'precio_tipo' : $("#idCort"+selected[i] + ' .precio_tipo').html(), 
             'cantidad': $("#idCort"+selected[i] + ' .cantidad').html(),
             'total': $("#idCort"+selected[i] + ' .total').html()           
    }
    pagos.push(pag);

    

    maquila = $("#idCort"+selected[i] + ' .apodo').html();

    // $("#tableModal").append(a);
    
    
  }
  console.log(pagos);
  console.log(granTotal);



  $.ajax({
    type: 'POST',
    url: 'http://localhost/santafeuniformes/index.php/AjaxAsignacionMaquilas/pagoMaquila',
    data:{
      pay_data: pagos,
      maquila : maquila,
      granTotal : granTotal
    },
    success: function (data) {
      for (let i = 0; i < selected.length; i++) {
        $("#idCort" + selected[i]).remove();
        console.log(`#idf{i}` + '.select');
        $('#idModal' + i).remove();
        console.log('#idModal' + i);
      }      
      $('#granTotal').empty();
      $("#pagoMaquilaTrigger").modal('hide');
    }
  })
    .fail(function () {
      alert('Hubo un errror al cargar los vídeos')
    })
  });

$("#cancelbutton").click(function (event){
  $("#cancelbutton").click(function (event) {
    let selected = new Array();
    $("input:checkbox[name=selected]:checked").each(function () {
      selected.push($(this).val());
    });
      for (let i = 0; i < selected.length; i++) {
        $('#idModal' + i).remove();
        console.log('#idModal' + i);
      };
      $('#granTotal').empty();
      $("#pagoMaquilaTrigger").modal('hide');
    });

});