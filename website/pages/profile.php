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


</head>

<body>

	<?php include './navigation-bar.php'; ?>

	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<div class="col-md-3">
				<p class="lead"><span class="glyphicon glyphicon-user"></span>    Utilizador</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Os meus leilões</a>
					<a href="#" class="list-group-item">As minhas licitações</a>
					<a href="#" class="list-group-item">Mensagens</a>
					<a href="#" class="list-group-item">Desejos</a>
					<a href="#" class="list-group-item active">Configurações</a>
				</div>
			</div>

			<div class="col-md-9 well">
				<div class="form-group">
					<label class="icon-title" for="comment"><span class="glyphicon glyphicon-pencil"></span>    Breve descrição</label>
					<br>
					<textarea class="form-control" rows="3" id="comment" maxlength="300"></textarea>
				</div>
				<hr>
				<div class="form-group">
					<label class="icon-title" for="comment"><span class="glyphicon glyphicon-list"></span>    Marcas a listar na página principal</label>
					<br>
					<div class="row">
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 1</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 2</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 3</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 4</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 5</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 6</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 7</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 8</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Opção 9</label>
						</div>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label class="icon-title" for="comment"><span class="glyphicon glyphicon-bell"></span>    Notificações a receber</label>
					<br>
					<div class="row">
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Licitações ultrapassadas</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Novos leilões na lista de desejos</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Novas mensagens</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Fim de leilão</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Licitações nos meus leilões</label>
						</div>
						<div class="col-md-3">
							<label><input type="checkbox" value="">  Fim de leilões em que licitei</label>
						</div>
					</div>
				</div>
				<hr>
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