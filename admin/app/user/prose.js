
$(document).ready(function() {

	$('form').submit(function(event) {
		$('.form-group').removeClass('has-error');
		$('.help-block').remove();
		var formData = {
			'firstn' 				: $('input[name=firstn]').val(),
			'lastn' 				: $('input[name=lastn]').val(),
			'email' 				: $('input[name=email]').val(),
			'nomerhp' 				: $('input[name=nomerhp]').val(),
			'id'				 	: $('input[name=id]').val()
		};

		$.ajax({
			
			type 		: 'POST',
			url 		: 'app/user/prose.php',
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
