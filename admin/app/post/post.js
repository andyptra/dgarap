// magic.js
$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {
         tinyMCE.triggerSave();
		$('.form-group').removeClass('has-error'); 
		$('.help-block').remove(); 

		 var formData = new FormData(this);
		$.ajax({
			type: "POST",
			url: "app/post/process.php",
			data:  formData,
            mimeType:"multipart/form-data",
			processData: false,
			contentType: false,
			dataType 	: 'json', 
			encode 		: true
		})
			
			.done(function(data) {

				
				console.log(data); 

			
				if ( ! data.success) {
					if (data.errors.kategori_berita) {
						var answer = alertify.error("Kategori Masih Kosong");

						$('#kategori_berita-group').addClass('has-error'); // add the error class to show red input
						$('#kategori_berita-group').append('<div class="help-block">' + data.errors.kategori_berita + '</div>'); // add the actual error message under our input
					}
					// handle errors for name ---------------
					if (data.errors.isi) {
						var answer = alertify.error("Isi Berita Masih");
						$('#isi-group').addClass('has-error'); // add the error class to show red input
						$('#isi-group').append('<div class="help-block">' + data.errors.isi + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.judul) {
						var answer = alertify.error("judul masih kosong");

						$('#txtEditorContent5-group').addClass('has-error'); // add the error class to show red input
						$('#txtEditorContent5-group').append('<div class="help-block">' + data.errors.judul + '</div>'); // add the actual error message under our input
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
