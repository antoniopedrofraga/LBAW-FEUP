$( document ).ready(function() {
	// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
	$('#mesadmin').click(function () {
        console.log("cenas");
		$('#create-mensage-admin-modal').modal({
			show: true
		});
	});

});