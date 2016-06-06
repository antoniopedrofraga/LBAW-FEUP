
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
		uploadUrl: "../actions/upload/create-auction.php",
		uploadExtraData: function() {
			return {
				enddate: $('#end-date').val(),
				nome: $('#nome').val(),
				licitacaoBase: $('#licitacaoBase').val(),
				descricaocompleta: $('#descricaocompleta').val(),
				descricaobreve: $('#descricaobreve').val(),
				brand: $('#brand').val()
			};
		}
	});

	$("#images").on('filebatchuploadcomplete', function(event, data, previewId, index) {
		var form = data.form, files = data.files, extra = data.extra,
		response = data.response, reader = data.reader;
		location.reload();
	});

	$("#create-auction-modal").submit(function( event ) {
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
	});

	$('#licitacaoBase').on('change', function() {
		var $this = $(this);
		if ($this.val() < 0.01) {
			$this.val('0.01');
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

function getDatesDiferenceInDays() {
	var startDate = new Date(getCurrentDate());
	var endDate = new Date($('#end-date').val());
	var timeDiff = Math.abs(date2.getTime() - date1.getTime());
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
}



function getBrands() {
	$.getJSON("../ajax/get-brands.php", function(data) {
		var brands = data;
		$('#brand').html('');
		output = '';
		for (brand in brands) {
			output += '<option id = "' + brands[brand].idmarca + '"">' + brands[brand].nome+ '</option>';
		}
		$('#brand').append(output);
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