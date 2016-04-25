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
	<link href="../css/feedback.css" rel="stylesheet">
	<link href="../css/navigation-bar.css" rel="stylesheet">

</head>

<body>

	<?php include './navigation-bar.php'; ?>

	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<div class="col-md-9 col-centered">
				<h2>
                    <p><span class="glyphicon glyphicon-bell"></span>    Notificações</p>
                </h2>
                <br>
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="#">Todas</a></li>
					<li><a href="#">Mensagens</a></li>
					<li><a href="#">Leilões</a></li>
				</ul>

				<div class="well">

					<div class="row">
						<div class="col-md-12">
							<h4>
								<span class="glyphicon glyphicon-envelope"></span>    Mensagem
								<span class="pull-right">Há 2 minutos</span>
							</h4>
							<p><a href="#">Pedro</a> enviou-lhe uma mensagem: Olá caro leiloeiro...</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h4>
								<span class="glyphicon glyphicon-euro"></span>    Nova licitação
								<span class="pull-right">Há 1 hora</span>
							</h4>
							<p>O utilizador <a href="#">João</a> licitou no teu <a href="#">leilão</a>.</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h4>
								<span class="glyphicon glyphicon-circle-arrow-up"></span>    Licitação ultrapassada
								<span class="pull-right">Há 1 dia</span>
							</h4>
							<p>A tua licitação no leilão <a href="#">X</a> foi ultrapassada.</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-12">
							<h4>
								<span class="glyphicon glyphicon-time"></span>    Fim de leilão
								<span class="pull-right">Há 2 dias</span>
							</h4>
							<p>O tempo do teu <a href="#">leilão</a> chegou ao fim.</p>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>
	<!-- /.container -->

	<div class="container">

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>