
$(document).ready(function() {

	$('form').submit(function(event) {
		$('.form-group').removeClass('has-error');
		$('.help-block').remove();
		var formData = {
			'password_name' 		: $('input[name=password_name]').val(),
			'id'				 	: $('input[name=id]').val()
		};

		$.ajax({
			
			type 		: 'POST',
			url 		: 'app/userpswd/prose.php',
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
