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