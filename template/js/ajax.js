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
	console.log("holi");
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
