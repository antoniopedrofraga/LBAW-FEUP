<!DOCTYPE html>
<html>
<script src="../sweetalert/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
<link href="../css/visitor.css" rel="stylesheet">
<script src="../js/jquery.js"></script>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
		function autenticar() {
			swal({
				title: "Autenticar",
				text:"<form><input class='alert-data' placeholder='utilizador' type='text'><br><input class='alert-data' placeholder='password' type='password'> </form>",
				html: true,
				imageUrl: "../images/security.png",
				showCancelButton: true,
			},
			function(isConfirm){
				return isConfirm;
			});
		}
		autenticar();
	}, false );
</script>
</html>