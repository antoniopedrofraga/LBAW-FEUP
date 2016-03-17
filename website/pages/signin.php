<!DOCTYPE html>
<html>
<script src="../sweetalert/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
<link href="../css/visitor.css" rel="stylesheet">
<script src="../js/jquery.js"></script>

<script>
	document.addEventListener( 'DOMContentLoaded', function () {
		function  registar() {
			swal({
				title: "Registar",
				text:"<form><input class='login-data' placeholder='utilizador' type='text'><br><input class='login-data' placeholder='e-mail' type='text'><br><input placeholder='password' class='login-data' type='password'><br><input class='login-data' type='date' placeholder='data de nascimento: ' /><br></form>",
				html: true,
				imageUrl: "../images/signin.png",
				showCancelButton: true,
			},
			function(isConfirm){
				return isConfirm;
			});
		}

		registar();
	}, false );
</script>
</html>