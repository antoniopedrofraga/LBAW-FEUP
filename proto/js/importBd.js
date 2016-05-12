
/* Plugin utilizado: http://plugins.krajee.com/file-input */

$(document).on('ready', function() {
	
	$('#input-image-1').fileinput({
		showUpload: true,
		uploadUrl: 'upload.php',
		dropZoneEnabled: false
	});
	
});