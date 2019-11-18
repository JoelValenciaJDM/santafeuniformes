$("#form").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
            alertify.success("Se hicieron los cambios");
            
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});





$("#delate").click(function(event){
	alertify.confirm("¿Eliminar los registros?",
  		function(){
			var form_data = $("#form").serialize();
			$.ajax({
				url : "../deleteData",
				type: "POST",
				data : {data: form_data},
				success: () => {
					location.href="../list";
					alertify.success("Se hicieron los cambios");
					
				}
				
			});
			alertify.success('Ok');
			
  		},
  function(){
    alertify.error('Cancel');
  }).set('labels', {ok:'Aceptar', cancel:'Cancelar'}).setHeader('ALERTA!');

});


$("#formProveedor").submit(function(event){
    
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
            alertify.success("Se hicieron los cambios");
            
        }
        
	}).done(function(response){ //
		
		$.ajax({
			type:'POST',
			url:'http://localhost/santafeuniformes/index.php/ajax/getNewProveedor',
			dataType: "json",
			data:{},
			success:function(data){
					 console.log(data[0].id_proveedor);
					 var o = new Option(data[0].name, data[0].id_proveedor);
						/// jquerify the DOM object 'o' so we can use the html method
						$(o).html(data[0].name);
						$("#selectList").append(o);
						$("#selectList").val(data[0].id_proveedor);
						$("#proveedorTrigger").modal('hide');//ocultamos el modal
						$("#formProveedor")[0].reset();
			}
	});


    
    // $("#server-results").html(response);
	});
	
	
});



$("#formTipoPrenda").submit(function(event){
    
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
            alertify.success("Se hicieron los cambios");
            
        }
        
	}).done(function(response){ //
		
		$.ajax({
			type:'POST',
			url:'http://localhost/santafeuniformes/index.php/ajax/getNewTipoPrenda',
			dataType: "json",
			data:{},
			success:function(data){
					 console.log(data[0].id_tipo_prenda);
					 var o = new Option(data[0].name, data[0].id_tipo_prenda);
						/// jquerify the DOM object 'o' so we can use the html method
						$(o).html(data[0].name);
						$("#selectListtipoprenda").append(o);
						$("#selectListtipoprenda").val(data[0].id_tipo_prenda);
						$("#tipoprendaTrigger").modal('hide');//ocultamos el modal
						$("#formProveedor")[0].reset();
			}
	});
	  // $("#server-results").html(response);
	});

});


$("#formTipoTela").submit(function(event){ //Save the data from modal Tipo Tela
    
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    
  
  $.ajax({ //Post data to php controller 
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
            alertify.success("Se hicieron los cambios");
            
        }
        
	}).done(function(response){ //
		
		$.ajax({ //Get json from db
			type:'POST',
			url:'http://localhost/santafeuniformes/index.php/ajax/getNewTipoTela', //get the last id of the table
			dataType: "json",
			data:{},
			success:function(data){
					 console.log(data[0]);
					 var o = new Option(data[0].Nombre, data[0].id_tela); //add the data in a variable for the options
						/// jquerify the DOM object 'o' so we can use the html method
						$(o).html(data[0].Nombre); // search the option
						$("#selectListtipotela").append(o); //add a new option
						$("#selectListtipotela").val(data[0].id_tela); //add the valor
						$("#tipotelaTrigger").modal('hide');//close the modal
						$("#formTipoTela")[0].reset();
			}
	});
	  // $("#server-results").html(response);
	});

	
});

$("#advanced").submit(function(event){ //Save the data from modal Tipo Tela
    

		
		$.ajax({ //Get json from db
			type:'POST',
			url:'http://localhost/santafeuniformes/index.php/ajax/getNewTipoTela', //get the last id of the table
			dataType: "json",
			data:{},
			success:function(data){
									
			}
	});	
});



$("#formAdvancedOptions").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    var idPrenda = $("#id_prenda").val()
    var tallajeOld = $("#tallajeOld").val()
    var tallaje = $("#tallaje").val()
    var idUso = $("#id_uso").val()
		var forro = $("#forro").val()
		
		if(tallajeOld== tallaje){
			$.ajax({
				url : post_url,
				type: request_method,
						data : {data: form_data},
						success: () => {
								alertify.success("Se hicieron los cambios");
						}
						
			}).done(function(response){ //
				
				// $("#server-results").html(response);
			});
			$("#advancedOptionsTrigger").modal('hide');//close the modal
			$("#principalTrigger").modal('show');
			
			if(forro){
					console.log("holi prro");
			}
	}else if (tallajeOld != tallaje){
		$.ajax({
			url : "http://localhost/santafeuniformes/index.php/Ajax/advancedOptionsElse",
			type: request_method,
					data : {data: form_data},
					success: () => {
							alertify.success("Se hicieron los cambios");
							location.reload();

					}
					
		}).done(function(response){ //
			
			// $("#server-results").html(response);
		});
		location.reload();

	}
});

$("#formConsumoPrincipal").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
		console.log(form_data);
		var idUso = $("#id_uso").val();
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
						$("#principalTrigger").modal('hide');
						console.log(forro);
						alertify.success("Se hicieron los cambios");
						if(idUso==2 || idUso==3 || idUso==4){
							$("#secundariaTrigger").modal('show');
						}else{
						if($("#forro").prop('checked')){
							$("#ForroTrigger").modal('show');
							
						}
					}
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});

$("#formConsumoSecundaria").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
		console.log(form_data);
		var idUso = $("#id_uso").val();
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
						$("#principalTrigger").modal('hide');
						console.log(forro);
						alertify.success("Se hicieron los cambios");
						if(idUso==3 || idUso==4){
						   $("#secundariaTrigger").modal('hide');
							 $("#terciariaTrigger").modal('show');
						}else{
						if($("#forro").prop('checked')){
							$("#secundariaTrigger").modal('hide');
							$("#ForroTrigger").modal('show');
							
						}else{
							$("#secundariaTrigger").modal('hide');
							location.reload();
						}
					}
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});


$("#formConsumoTerciaria").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
		console.log(form_data);
		var idUso = $("#id_uso").val();
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
						$("#terceraTrigger").modal('hide');
						console.log(forro);
						alertify.success("Se hicieron los cambios");
						if(idUso==4){
							$("#terciariaTrigger").modal('hide');
							$("#cuartaTrigger").modal('show');
						}else{
						if($("#forro").prop('checked')){
							$("#terciariaTrigger").modal('hide');
							$("#ForroTrigger").modal('show');
							
						}else{
							$("#terciariaTrigger").modal('hide');
							location.reload();
						}
					}
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});

$("#formConsumoCuarta").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
		console.log(form_data);
		var idUso = $("#id_uso").val();
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {
						$("#terciariaTrigger").modal('hide');
						console.log(forro);
						alertify.success("Se hicieron los cambios");
						if($("#forro").prop('checked')){
							$("#cuartaTrigger").modal('hide');
							$("#ForroTrigger").modal('show');
							
						}else{
							$("#cuartaTrigger").modal('hide');
							location.reload();
						}
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});


$("#formConsumoForro").submit(function(event){
    
  event.preventDefault(); //prevent default action 
  var post_url = $(this).attr("action"); //get form action url
  var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
		console.log(form_data);
    
  
  $.ajax({
    url : post_url,
    type: request_method,
        data : {data: form_data},
        success: () => {

					$("#ForroTrigger").modal('hide');
						console.log(forro);
						alertify.success("Se hicieron los cambios");
						location.reload();

            
        }
        
  }).done(function(response){ //
    
    // $("#server-results").html(response);
  });
});