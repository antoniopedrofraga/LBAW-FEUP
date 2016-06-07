
/* Plugin utilizado: http://plugins.krajee.com/file-input */

$(document).on('ready', function() {

	/*$("#create-auction-modal").submit(function( event ) {
		var endDate = new Date($('#end-date').val());
		var startDate = new Date(getCurrentDate());
		console.log(endDate + " vs. " + startDate);
		if (endDate <= startDate) {
			$('#end-date').after('<span="invalid-error" style="color: red">Insere uma data futura.</span>');
			$('#end-date').css({"border-top":"1px solid #99182c","border-right": "1px solid #99182c", "border-left": "1px solid #99182c",  "border-bottom": "1px solid #99182c", "background-color" : "#ffcccc"});
			event.preventDefault();
		} else {
			$("#images").fileinput("upload").fileinput('disable');;
			event.preventDefault();
		}
	});*/

	var value =  getCurrentDate();

	$('#end-date-banish').daterangepicker({
		singleDatePicker: true,
		timePicker: true,
		timePicker24Hour: true,
		timePickerIncrement: 1,
		startDate: value,
		locale: {
			format: 'DD/MM/YYYY H:mm'
		}
	});

});

function getDatesDiferenceInDays() {
	var startDate = new Date(getCurrentDate());
	var endDate = new Date($('#end-date').val());
	var timeDiff = Math.abs(date2.getTime() - date1.getTime());
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
}

function getCurrentDate() {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	var hours = today.getHours();
	var minutes = today.getMinutes();
	var seconds = today.getSeconds();

	if(dd<10){
		dd='0'+dd
	} 
	if(mm<10){
		mm='0'+mm
	} 

	return dd + '/' + mm + '/' + yyyy + ' ' + hours + ':' + minutes;
}