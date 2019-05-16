
$(document).ready(function() {

	$('form').submit(function(event) {
		$('.form-group').removeClass('has-error');
		$('.help-block').remove();
		var formData = {
			'nama_course' 				: $('input[name=nama_course]').val(),
			'founder' 				: $('input[name=founder]').val(),
			'email' 				: $('input[name=email]').val(),
			'no_tlp'				: $('input[name=no_tlp]').val(),
			'alamat' 				: $('textarea[name=alamat]').val(),
			'id'				 	: $('input[name=id]').val()
		};

		$.ajax({
			
			type 		: 'POST',
			url 		: 'app/profil/prose.php',
			data 		: formData, 
			dataType 	: 'json', 
			encode 		: true
		})
			
			.done(function(data) {				
				console.log(data); 
				if ( ! data.success) {
					var answer =alertify.error("data error");
				
				} else {
					var answer = alertify.success("Data Berhasil Update");
				}
			})
			.fail(function(data) {
				console.log(data);
			});
		event.preventDefault();
	});

});
