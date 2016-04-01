<!DOCTYPE html>
<html>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script src="../sweetalert/dist/sweetalert.min.js"></script> 
<script src="../js/give-feedback.js"></script>
<script src="../star-rating/js/star-rating.js" type="text/javascript"></script>


<link href="../css/give-feedback.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../star-rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />

<meta charset="UTF-8">
<a href="#" class="btn btn-default" id="openBtn">Open modal</a>

<div id="modal-content" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Dar feedback</h3>
			</div>
			<div class="modal-body">
				<textarea class='form-control alert-data' rows='3' id='comment' maxlength='300' placeholder='Descrição do feedback'></textarea>

				<label for="input-5" class="control-label rating-label">Classifica este cliente</label>
				<input id="input-5" class="rating rating-loading" data-show-clear="false" data-show-caption="false">
			</div>
			<div class="modal-footer"> 
				<a href="#" class="btn" data-dismiss="modal">Fechar</a>
				<a href="#" class="btn btn-primary">Guardar feedback</a>
			</div>
		</div>
	</div>
</div>

