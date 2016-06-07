function getPageFromIndex(userid, page) {

	$.getJSON("../ajax/get-mybids.php", { id: userid }, function(data) {

		$("#info").html('');
		var output = "";
		var auction = page * 5;
		var size = data == null || data.length == 0 ? 0 : (data.length - auction < 5 ? data.length - auction : 5);
		var limit = auction + size;
		for (auction; auction < limit; auction++) {
			output += "<hr>";
			output += '<div class="row">';
			output += '<button id="' + data[auction].idleilao + '" type="button" class="close pull-right remove-auction" title="Remover leilão">&times;</button>';
			output += '<div class="col-md-3">';
			output += '<a href="#">';
			var image = data[auction].imagelink != null ? data[auction].imagelink : 'http://placehold.it/200x200';
			output += '<img class="carousel-image" alt="" width="200" height="200" style="background: url(' + image +') 50% 50% no-repeat; background-size: cover;">'
			output += '</a>';
			output += '</div>';
			output += '<div class="col-md-9">';
			output += '<h3>' + data[auction].nome + '</h3>';
			output += '<h4><span id="clock-' + data[auction].idleilao + '"></span> ' + '(Valor da licitação: <span class="badge">' + data[auction].valor + '€</span>)</h4>';
			output += '<p>' + data[auction].descricaobreve + '</p>';
			output += '<a class="btn btn-warning" href="../pages/auction.php?id=' + data[auction].idleilao + '">Ver Leilão <span class="glyphicon glyphicon-chevron-right"></span></a>';
			output += '</div>';
			output += '</div>';
			$("#info").append(output);
			output = "";
			$('#clock-' + data[auction].idleilao).countdown(data[auction].datafinal)
			.on('update.countdown', function(event) {
				var format = '%H:%M:%S';
				if(event.offset.days > 0) {
					format = '%-d day%!d ' + format;
				}
				if(event.offset.weeks > 0) {
					format = '%-w week%!w ' + format;
				}
				$(this).html(event.strftime(format));
			})
			.on('finish.countdown', function(event) {
				$(this).html('Leilão terminado')
				.parent().addClass('disabled');
			});
		}

		if (data == null || data.length == 0) {
			output += '<hr>';
			output += '<div class="row">';
			output += '<h3 style="text-align:center;">Não foram encontradas licitações...</h3>';
			output += '</div>';
		} else {
			output += '<div class="row text-center">';
			output += '<div class="col-lg-12">';
			output += '<ul class="pagination">';
			var pagesNumber = data.length / 5 === parseInt(data.length / 5) ? parseInt(data.length / 5) : parseInt(data.length / 5) + 1;
			for (var i = 0; i < pagesNumber; i++) {
				output += '<li';
				if (i == page)
					output += ' class="active"';
				output += '>';
				output += '<a class = "paginate" href="#">' + (i+1) + '</a>';
				output += '</li>'
			}
		}

		$("#info").append(output);
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

$( document ).ready(function() {
	var page = 0;
	var id = getIdFromURL();
	getPageFromIndex(id, page);
	$('body').on('click', '.paginate', function (){
		var text = $(this).text()
		if (text != '')
			var index = parseInt($(this).text()) - 1;
		page = index;

		getPageFromIndex(id, index);
	});
});