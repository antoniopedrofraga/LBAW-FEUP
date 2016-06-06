
/* Plugin utilizado: http://plugins.krajee.com/file-input */

$(document).on('ready', function() {
	


	$("#images").fileinput({
		uploadAsync: false,
		language: "pt",
		maxFileCount: 5,
		dropZoneEnabled: false,
		maxFileSize: 2048,
		showUpload : false,
		showUploadedThumbs: false,
		previewSettings: {
			image: {width: "140px", height: "auto"}
		},
		fileActionSettings: {
			'showUpload': true,
			'showZoom': false,
			'showRemove': false,
		},
		uploadUrl: "../actions/upload/upload-image.php",
		uploadExtraData: function() {
			return {
				username: username
			};
		}
	});

	var value =  getCurrentDate();

	$('#end-date').daterangepicker({
		singleDatePicker: true,
		timePicker: true,
		timePicker24Hour: true,
		timePickerIncrement: 1,
		startDate: value,
		locale: {
			format: 'DD/MM/YYYY H:mm'
		}
	});

	getBrands();

});



function getBrands() {
	$.getJSON("../ajax/get-brands.php", function(data) {
		var brands = data;
		$('#sel1').html('');
		output = '';
		for (brand in brands) {
			output += '<option id = "' + brands[brand].idmarca + '"">' + brands[brand].nome+ '</option>';
		}
		$('#sel1').append(output);
	});
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