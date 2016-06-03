
$( document ).ready(function() {
	var page = 0;
	var id = getIdFromURL();
	getPageFromIndex(id, page);
});

function getPageFromIndex(userid, page) {

	$.getJSON("../ajax/get-myauctions.php", { id: userid }, function(data) {

		$("#info").html('');
		var output = "";
		var auction = page * 5;
		var size = data == null || data.length == 0 ? 0 : (data.length < 5 ? data.length : 5);
		var limit = auction + size;
		console.log(data);
		for (auction; auction < limit; auction++) {
			console.log(data[auction]);
			output += "<hr>";
			output += '<div class="row">';
			output += '<a href="#">';
			output += '<img class="img-responsive" src="http://placehold.it/250x250" alt="">';
			output += '</a>';
			output += '<div class="col-md-5">';
			output += '<h3>' + data[auction].nome + '</h3>';
			output += '<h4>Aberto</h4>';
			output += '<p>' + data[auction].descricaobreve + '</p>';
			output += '<a class="btn btn-primary" href="../pages/auction.php?id=' + data[auction].idleilao + '">Ver Leilão <span class="glyphicon glyphicon-chevron-right"></span></a>'
			output += '</div>'
		}

		if (data == null || data.length == 0)
			output = "<h3>Não foram encontrados leilões...</h3>";

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