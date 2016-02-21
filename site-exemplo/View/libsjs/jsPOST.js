// ajax_busca_inativos.js
$(document).ready(function() {

	// processar o formulário
	$('form').submit(function(event) {

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		
		var formData = {
		    'nome'   	 : $('input[id=nome]').val(),
		    'email'  	 : $('input[id=email]').val(),
		    'mesage'  	 : $('textarea[id=mesage]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'https://rdoer.herokuapp.com/contatos', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
	});

});
