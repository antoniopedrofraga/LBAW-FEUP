var page = 1;
var limit = 30;
/* prevenir mudança de id */
var id = -1;
var count = -1;

$( document ).ready(function() {
	id = getIdFromURL();
	getRcvMessages(id);
	$('#rcvdBtn').on('click', function () {
		getRcvMessages(id);
		showButtons(true);
	});
	$('#sentBtn').on('click', function () {
		getSentMessages(id);
		showButtons(true);
	});
	$('#createBtn').on('click', function () {
		showButtons(false);
	});
});



function getRcvMessages(userid) {
	page = 1;
	$.getJSON("../ajax/get-rcvd-messages-count.php", { id: userid }, function(data) {
		count = data[0].count;
		$.getJSON("../ajax/get-rcvd-messages.php", { id: userid, offset: ((page - 1) * limit), limit: limit }, function(data) {

			var messages = $("#messages .list-group");
			messages.html('');
			output = '';
			updateOffset(data.length);
			for (message in data) {
				output += '<a href="#" class="list-group-item">';
				output += '<span class="name" style="min-width: 120px; display: inline-block;">' + data[message].nomeutilizador + '</span>';
				output += '<span class="text-muted">' + data[message].texto + '</span> <span class="badge" title="' + data[message].horamensagem + '">' + data[message].datamensagem + '</span>'
				output += '</a>';
			}
			if (data == null || data.length == 0) {
				output +=  '<a href="#" class="list-group-item"><span class="text-center">Não tem mensagens recebidas.</span></a>';
			}
			messages.append(output);
		});
	});

	$('#paginate-left').on('click', function () {
		if (page > 1) {
			page--;
			getRcvMessages(id);
		}
	});
	$('#paginate-right').on('click', function () {
		if (page * limit < count) {
			page++;
			getRcvMessages(id);
		}
	});
}

function getSentMessages(userid) {
	page = 1;
	$.getJSON("../ajax/get-sent-messages-count.php", { id: userid }, function(data) {
		count = data.count;
		$.getJSON("../ajax/get-sent-messages.php", { id: userid, offset: ((page - 1) * limit), limit: limit }, function(data) {

			var messages = $("#sent .list-group");
			messages.html('');
			output = '';
			updateOffset(data.length);
			for (message in data) {
				output += '<a href="#" class="list-group-item">';
				output += '<span class="name" style="min-width: 120px; display: inline-block;">Para: ' + data[message].nomeutilizador + '</span>';
				output += '<span class="text-muted">' + data[message].texto + '</span> <span class="badge" title="' + data[message].horamensagem + '">' + data[message].datamensagem + '</span>'
				output += '</a>';
			}
			if (data == null || data.length == 0) {
				output +=  '<a href="#" class="list-group-item"><span class="text-center">Não enviou nenhuma mensagem.</span></a>';
			}
			messages.append(output);

		});
	});
	
	$('#paginate-left').on('click', function () {
		if (page > 1) {
			page--;
			getSentMessages(id);
		}
	});
	$('#paginate-right').on('click', function () {
		if (page * limit < count) {
			page++;
			getSentMessages(id);
		}
	});
}

function showButtons(show) {
	var display = show ? 1 : 0;
	$("#buttons").css("opacity", "" + display);
}

function updateOffset(length) {
	var leftbound = limit * (page - 1) + 1;
	var rightbound = leftbound + length - 1;
	leftbound = count == 0 ? 0 : leftbound;
	$('#offset').html('');
	$('#offset').append('<b>' + leftbound + '</b>–<b>' + rightbound + '</b> of <b>' + count + '</b>')
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