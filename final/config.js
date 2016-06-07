var id = -1;

$( document ).ready(function() {
	id = getIdFromURL();
	getConfigs(id);
});

function getConfigs(userid) {
	$.getJSON("../ajax/get-configs.php", { id: userid }, function(data) {
		if (data = null)
			alert(data);
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