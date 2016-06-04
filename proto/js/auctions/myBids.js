function getPageFromIndex(userid, page) {

	$.getJSON("../ajax/get-mybids.php", { id: userid }, function(data) {

		$("#info").html('');
		var output = "";
		var auction = page * 5;
		var size = data == null || data.length == 0 ? 0 : (data.length - auction < 5 ? data.length - auction : 5);
		var limit = auction + size;
		for (auction; auction < limit; auction++) {
			console.log('auction ' + auction + ' / limit ' + limit);
			output += "<hr>";
			output += '<div class="row">';
			output += '<div class="col-md-3">';
			output += '<a href="#">';
			output += '<img class="img-responsive" src="http://placehold.it/200x200" alt="">';
			output += '</a>';
			output += '</div>';
			output += '<div class="col-md-9">';
			output += '<h3>' + data[auction].nome + '</h3>';
			output += '<h4>Aberto ' + '(Valor da licitação: ' + data[auction].valor + '€)</h4>';
			output += '<p>' + data[auction].descricaobreve + '</p>';
			output += '<a class="btn btn-warning" href="../pages/auction.php?id=' + data[auction].idleilao + '">Ver Leilão <span class="glyphicon glyphicon-chevron-right"></span></a>';
			output += '</div>';
			output += '</div>';
		}

		if (data == null || data.length == 0) {
			output += '<hr>';
			output += '<div class="row">';
			output += '<h3>Não foram encontrados licitações...</h3>';
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