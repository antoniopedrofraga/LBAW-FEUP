
$( document ).ready(function() {
	$('#login').click(function(){
		$('#login-modal').modal({
			show: true
		});
	});
	$('#signin').click(function(){
		$('#signin-modal').modal({
			show: true
		});
	});
	$('#birthday').daterangepicker({
		changeMonth: true,
		changeYear: true,
		singleDatePicker: true,
		locale: {
			format: 'MM/DD/YYYY'
		}
	});
	$('#submit-login').click(function(){
		var username = $('#login-user').val();
		var password = $('#login-password').val();
		$.post("../actions/users/login.php", {username: username, password: password}, null, "json");
	});
	$('#submit-signin').click(function(){
		var username = $('#signin-user').val();
		var email = $('#singin-email').val();
		var password = $('#singin-password').val();
		var birthdate = $('#singin-birthdate').val();
		$.post("../actions/users/login.php", {username: username, password: password, email: email, birthdate: birthdate}, null, "json");
	});
});

