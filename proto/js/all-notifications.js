var page = 1;
var limit = 15;
/* prevenir mudança de id */
var count = -1;

$( document ).ready(function() {
	getNotifications();
	$('body').on('click', '.paginate', function (){
		var index = parseInt($(this).text());
		if (index * limit < count) {
			page = parseInt(count / limit);
		} else if (index < 1) {
			page = 1;
		} else {
			page = parseInt(index);
		}
		getNotifications();
	});
});


function getNotifications() {
	$.getJSON("../ajax/get-notifications-count.php", { id: userid }, function(data) {
		count = data.count;
		$.getJSON("../ajax/get-all-notifications.php", { id: userid, offset: ((page - 1) * limit), limit: limit }, function(data) {
			var notifications = $(".notifications-container");
			notifications.html('');
			output = '';
			//updateOffset(data.length);
			for (notification in data) {
				output += '<a href="#" class="list-group-item">';
				output += '<h4 class="list-group-item-heading">' + data[notification].texto + '</h4>';
				output += '<p class="list-group-item-text">' + data[notification].datanotificacao + ' às ' + data[notification].horanotificacao + '</p>';
				output += '</a>';
			}
			if (data == null || data.length == 0) {
				output +=  '<a href="#" class="list-group-item active" style="margin-top: 5%"><h4 class="list-group-item-heading" style="text-align: center">Não tem notificações</h4></a>';
			} else {
				output += '<div class="row text-center">';
				output += '<div class="col-lg-12">';
				output += '<ul class="pagination">';
				var pagesNumber = count / limit === parseInt(count / limit) ? parseInt(count / limit) : parseInt(count / limit) + 1;
				for (var i = 0; i < pagesNumber; i++) {
					output += '<li';
					if (i + 1 == page) {
						output += ' class="active"';
					}
					output += '>';
					output += '<a class = "paginate" href="#">' + (i+1) + '</a>';
					output += '</li>'
				}
				output += '</ul>';
				output += '</div>';
				output += '</div>';
			}
			notifications.append(output);
		});
	});
}