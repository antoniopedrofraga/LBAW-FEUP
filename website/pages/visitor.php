<!DOCTYPE html>
<html>
<script src="../sweetalert/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
<link href="../css/visitor.css" rel="stylesheet">

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
		function autenticar() {
			swal({
				title: "Autenticar",
				text:"<form> Utilizador: <input class='login-data' type='text'><br><br>Password: <input class='login-data' type='password'> </form>",
				html: true,
				imageUrl: "../images/security.png",
				showCancelButton: true,
			},
			function(isConfirm){
				if (isConfirm) {
					swal("Result !","Job cancelled successfully.");
				} else {
					swal("Cancelled  !", "Process aborted");
				}
			});
		}
		function  registar() {
			swal({
				title: "Registar",
				text:"<form> Utilizador: <input class='login-data' type='text'><br><br>E-mail: <input class='login-data' placeholder='exemplo@email.com' type='text'><br><br>Password: <input class='login-data' type='password'> </form>",
				html: true,
				imageUrl: "../images/security.png",
				showCancelButton: true,
			},
			function(isConfirm){
				if (isConfirm) {
					swal("Result !","Job cancelled successfully.");
				} else {
					swal("Cancelled  !", "Process aborted");
				}
			});
		}
		registar();
	}, false );
</script>
</html>