// magic.js
$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {
         tinyMCE.triggerSave();
		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			
			'isi'	 							: $('textarea[name=isi]').val(),
			'id_userk'							: $('input[name=id_userk]').val()
			

		};

		// process the form
		$.ajax({
			
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'app/testimoni/process.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name ---------------
					if (data.errors.isi) {
						var answer = alertify.error("Isi testimoni");
						$('#isi-group').addClass('has-error'); // add the error class to show red input
						$('#isi-group').append('<div class="help-block">' + data.errors.isi + '</div>'); // add the actual error message under our input
					}


					
				} else {

					

					var answer = alertify.success("Data Berhasil Di simpan");



				}
			})

			
			.fail(function(data) {

			
				console.log(data);
			});

		
		event.preventDefault();
	});

});
