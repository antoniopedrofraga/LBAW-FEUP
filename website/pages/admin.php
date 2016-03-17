<!DOCTYPE html>
<html lang="pt">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>AutoLeilões</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/navigation-bar.css" rel="stylesheet">
	<link href="../css/profile.css" rel="stylesheet">
	<link href="../css/admin.css" rel="stylesheet">


</head>
<div class="body">
	<?php include './navigation-bar.php'; ?>
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<p class="lead"><span class="glyphicon glyphicon-cog"></span>    Administrador</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Leilões</a>
					<a href="#" class="list-group-item active">Utilizadores</a>
					<a href="#" class="list-group-item">Mensagens</a>
				</div>
			</div>

			<div class="col-md-9 well">
				<input type="text" class="form-control" placeholder="Pesquisar utilizadores">
				<div class="form-group">
					<label class="icon-title letter" for="comment">A</label>
					<div class="well">
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name vcenter" href="#">António</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name" href="#">Artur</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<label class="icon-title letter" for="comment">B</label>
					<div class="well">
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name" href="#">Bárbara</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name" href="#">Bruna</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<span><a class="usr-name" href="#">Bruno</a></span>
								<div class="col-md-2 pull-right">
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-asterisk"></span></button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-warning round usr-btn"><span class="glyphicon glyphicon-trash"></span></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
<!-- /.container -->

<?php include './footer.php'; ?>

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

</body>


</html>