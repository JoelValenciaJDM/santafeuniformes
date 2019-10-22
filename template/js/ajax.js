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