<!DOCTYPE html>
<html>

<!-- Include Required Prerequisites -->
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/create-auction.js"></script>
<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />

<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />


<meta charset="UTF-8">

<a href="#" class="btn btn-default" id="openBtn">Open modal</a>

<div id="modal-content" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Criar leilão</h3>
			</div>
			<div class="modal-body">
				<div>
					<textarea class='form-control popup-element' rows='1' id='comment' placeholder="Nome do leilão" required></textarea>
				</div>
				<div>
					<textarea class='form-control popup-element' rows='2' id='comment' maxlength='300' placeholder="Breve descrição" required></textarea>
				</div>
				<div>
					<textarea class='form-control popup-element' rows='4' id='comment' maxlength='900' placeholder="Descrição completa" required></textarea>
				</div>
				<div id="block_container">

					<div id='block1'>
						<h4>Data de fim</h4>
						<input class='popup-element' type="text" name="enddate" value="10/24/1984" />
					</div>
					<div id="block2">
						<a class="btn btn-warning btn-large gliphicon glyphicon-plus">   Adicionar fotos</a>
					</div>

				</div>
			</div>
			<div class="modal-footer"> 
				<a href="#" class="btn" data-dismiss="modal">Fechar</a>
				<a href="#" class="btn btn-primary">Criar</a>
			</div>
		</div>
	</div>
</div>