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
