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
		showDropdowns: true,
		locale: {
			format: 'YYYY/MM/DD'
		}
	});
});

