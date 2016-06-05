var id = -1;

$( document ).ready(function() {
	id = getIdFromURL();
	getConfigs(id);
	$('#description').keyup(function() {
		var text = $('#description').val();
		$.ajax({
			url: '../ajax/update-description.php',
			type: 'GET',
			data: { id: id, description: text} ,
			success: function (response) {
				$("#saveBtn").attr('value', 'Guardado!');
				$("#saveBtn").delay(1500).attr('value', 'Guardar');
			},
			error: function () {
				$("#saveBtn").attr('value', 'Erro! (Clique aqui para guardar)');
				$("#saveBtn").delay(1500).attr('value', 'Guardar');
			}
		});
	});
	$('.marcas .marca').change(function() {
		var value = $(this).val();
		var checked = $(this).is(":checked");
		$.ajax({
			url: '../ajax/update-brands.php',
			type: 'GET',
			data: { nome: value, checked: checked} ,
			success: function (response) {
				$("#saveBtn").attr('value', 'Guardado!');
				$("#saveBtn").delay(1500).attr('value', 'Guardar');
			},
			error: function () {
				$("#saveBtn").attr('value', 'Erro! (Clique aqui para guardar)');
				$("#saveBtn").delay(1500).attr('value', 'Guardar');
			}
		});
	}*/
});


function getConfigs(userid) {
	$.getJSON("../ajax/get-configs.php", { id: userid }, function(data) {
		if (data.descricaomembro != null) {
			$('#description').text(data.descricaomembro);
		}
	});
	$.getJSON("../ajax/get-brands.php", function(data) {
		var brands = data;
		$.getJSON("../ajax/get-preferences.php", { id: id }, function(data) {
			$('#marcas').html('');
			output = '';
			if (brands.length)
				output += '<div class="row">';
			for (index in brands) {
				var checked = isInArray(brands[index].idmarca, data) ? 'checked' : '';
				output += '<div class="col-md-3"><label><input class="marca" type="checkbox" value="' + brands[index].nome +'" ' + checked + '>   ' + brands[index].nome + '</label></div>';
			}
			$('#marcas').append(output);
		});
	});

	}

	function getIdFromURL() {
		var parts = window.location.search.substr(1).split("&");
		var $_GET = {};
		for (var i = 0; i < parts.length; i++) {
			var temp = parts[i].split("=");
			$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
		}
		return $_GET['id'];
	}

	function isInArray(value, array) {
		for (var index = 0; index < array.length; index++) {
			if (array[index].idmarca == value)
				return true;
		}
		return false;
	}