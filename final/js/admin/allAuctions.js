
function getPageFromIndex(page) {

	$.getJSON("../ajax/get-all-auctions.php", {}, function(data) {

		$("#info").html('');
		var output = "";
		var auction = page * 5;
		var size = data == null || data.length == 0 ? 0 : (data.length - auction < 5 ? data.length - auction : 5);
		var limit = auction + size;
		for (auction; auction < limit; auction++) {			
			output += "<hr>";
			output += '<div class="row well">';
			
			output += "<div class=\"col-md-3 pull-right\">";
			output += "<div class=\"col-md-4 pull-right\">";
			output += "<button type=\"button\" onclick=\"deleteAuction(" + data[auction].idleilao + ",'" +  data[auction].idleiloeiro + "','" +  data[auction].nome + "')\" class=\"btn btn-warning round usr-btn\" title=\"Remover leilão\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
			output += "</div>";
			output += "<div class=\"col-md-4 pull-right\">";
			output += "<button type=\"button\" class=\"btn btn-warning round usr-btn\" title=\"Editar leilão\"><span class=\"glyphicon glyphicon-pencil\"></span></button>";
			output += "</div>";
			output += "</div>";
			
			output += '<div class="col-md-4">';
			output += '<a href="../pages/auction.php?id=' + data[auction].idleilao + '">';
			var image = data[auction].imagelink != null ? data[auction].imagelink : 'http://placehold.it/200x200';
			output += '<img class="carousel-image" alt="" width="200" height="200" style="background: url(' + image +') 50% 50% no-repeat; background-size: cover; display: block;">'
			output += '</a>';
			output += '</div>';
			output += '<div class="col-md-8">';
			output += '<h3>' + data[auction].nome + '</h3>';
			output += '<h4>Aberto</h4>';
			output += '<p>' + data[auction].descricaobreve + '</p>';
			output += '<a class="btn btn-warning" href="../pages/auction.php?id=' + data[auction].idleilao + '">Ver Leilão <span class="glyphicon glyphicon-chevron-right"></span></a>';
			output += '</div>';
			output += '</div>';
			
		}

		if (data == null || data.length == 0) {
			output += '<hr>';
			output += '<div class="row">';
			output += '<h3 style="text-align:center;">Não foram encontrados leilões...</h3>';
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

$( document ).ready(function() {
	var page = 0;
	getPageFromIndex(page);
	$('body').on('click', '.paginate', function (){
		var text = $(this).text()
		if (text != '')
			var index = parseInt($(this).text()) - 1;
		page = index;

		getPageFromIndex(index);
	});
});

function deleteAuction(idleilao, idleiloeiro, nameleilao){  
  	$('input#auctionid').attr('value',idleilao);
	$('input#auctionerid').attr('value',idleiloeiro);
  	$('input#nameleilao').attr('value',nameleilao);
	$('#deleteAuction-user-modal').modal({
		show: true
	});
}