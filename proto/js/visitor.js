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

	$('input[name="email"]').keyup(function() {
		if (!validateEmail($(this).val())) {
			$(this).removeClass('text-success');
			$(this).addClass('text-danger');
		} else {
			$(this).removeClass('text-danger');
			$(this).addClass('text-success');
		}

	});

	var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;
	$.fn.modal.Constructor.prototype.enforceFocus = function() {};
});


function validateEmail(email) {
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	return String(email).search (re) != -1;
}
