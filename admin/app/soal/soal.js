
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
			'txtEditorContent6' 				: $('textarea[name=txtEditorContent6]').val(),
			'txtEditorContent5' 				: $('textarea[name=txtEditorContent5]').val(),
			'txtEditorContent4' 				: $('textarea[name=txtEditorContent4]').val(),
			'txtEditorContent3' 				: $('textarea[name=txtEditorContent3]').val(),
			'txtEditorContent2' 				: $('textarea[name=txtEditorContent2]').val(),
			'txtEditorContent1' 				: $('textarea[name=txtEditorContent1]').val(),
			'id_ujian'				 			: $('input[name=id_ujian]').val(),
			'jawab'				 				: $('select[name=jawab]').val()


		};

		// process the form
		$.ajax({
			
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'app/soal/proses.php', // the url where we want to POST
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
					if (data.errors.jawab) {
						var answer = alertify.error("jawab Jawaban Masih Kosong");

						$('#jawab').addClass('has-error'); // add the error class to show red input
						$('#jawab').append('<div class="help-block">' + data.errors.jawab + '</div>'); // add the actual error message under our input
					}
					// handle errors for name ---------------
					if (data.errors.txtEditorContent6) {
						var answer = alertify.error("Data Soal Masih Kosong");
						$('#txtEditorContent6').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent6').append('<div class="help-block">' + data.errors.txtEditorContent6 + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.txtEditorContent5) {
						var answer = alertify.error("Jawaban A Masih Kosong");

						$('#txtEditorContent5').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent5').append('<div class="help-block">' + data.errors.txtEditorContent5 + '</div>'); // add the actual error message under our input
					}

					// handle errors for superhero alias ---------------
					if (data.errors.txtEditorContent4) {
						var answer = alertify.error("Jawaban B Masih Kosong");

						$('#txtEditorContent4').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent4').append('<div class="help-block">' + data.errors.txtEditorContent4 + '</div>'); // add the actual error message under our input
					}
					if (data.errors.txtEditorContent3) {
						var answer = alertify.error("Jawaban C Masih Kosong");

						$('#txtEditorContent3').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent3').append('<div class="help-block">' + data.errors.txtEditorContent3 + '</div>'); // add the actual error message under our input
					}
					if (data.errors.txtEditorContent2) {
						var answer = alertify.error("Jawaban D Masih Kosong");

						$('#txtEditorContent2').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent2').append('<div class="help-block">' + data.errors.txtEditorContent2 + '</div>'); // add the actual error message under our input
					}
					if (data.errors.txtEditorContent1) {
						var answer = alertify.error("Jawaban E Masih Kosong");

						$('#txtEditorContent1').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent1').append('<div class="help-block">' + data.errors.txtEditorContent1 + '</div>'); // add the actual error message under our input
					}
				    if(data.errors.dataku){
				    	$('#dataku').addClass('has-error'); // add the error class to show red input
						$('#dataku').append('<div class="help-block">' + data.errors.dataku + '</div>'); 
				    }	
					
				
				} else {

					// ALL GOOD! just show the success message!
					$('#cform')[0].reset();

					var answer = alertify.success("Data Berhasil Di simpan");

                 					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});
