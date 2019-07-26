$(document).ready(function() {

	$('#pass2').keyup(function() {

		var pass1 = $('#pass1').val();
		var pass2 = $('#pass2').val();

		if ( pass1 == pass2 ) {
			$('#error').text("coinciden").css("color","green");
		} else {
			$('#error').text("no coinciden").css("color","red");
		}

	});
	
	$('#ci_press').keyup(function() {

		var number = $('#ci_press').val();

		if ( number>=10000 && number<=999999999) {
			$('#error_ci').text("ci escrito correctamente").css("color","green");
		} else {
			$('#error_ci').text("ci mayor a 6 digitos").css("color","red");
		}

	});

});