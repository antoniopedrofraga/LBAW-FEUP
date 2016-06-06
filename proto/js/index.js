	
$( document ).ready(function() {

	$('#create-auction').click(function(){
		$('#create-auction-modal').modal({
			show: true
		});
	});

	$('.alert').fadeIn(1000).delay(3000).fadeOut(1000);

	$("#create-auction-modal").submit(function( event ) {
		var endDate = $('#end-date').val();
		var startDate = getCurrentDate();
		if (Date(endDate) <= Date(startDate)) {
			$('#end-date').css({"border-top":"1px solid #99182c","border-right": "1px solid #99182c", "border-left": "1px solid #99182c",  "border-bottom": "1px solid #99182c", "background-color" : "#ffcccc"});
			event.preventDefault();
			return false;
		}
	});

});


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