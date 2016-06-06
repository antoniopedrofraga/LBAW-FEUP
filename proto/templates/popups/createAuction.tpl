<div class="modal fade" id="create-auction-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="custom-modal-container create-auction" id="custom-content">
			<h1>Criar leilão</h1><br>
			<form action="../actions/upload/create-auction.php" method="post">
				<div>
					<textarea name='nome' class='form-control popup-element' rows='1' id='comment' placeholder="Nome do leilão" required></textarea>
				</div>
				<div>
					<textarea name='descricaobreve' class='form-control popup-element' rows='2' id='comment' maxlength='300' placeholder="Breve descrição" required></textarea>
				</div>
				<div>
					<textarea name='descricaocompleta' class='form-control popup-element' rows='4' id='comment' maxlength='900' placeholder="Descrição completa" required></textarea>
				</div>
				<div class="form-group">
				<h4 for="sel1">Marca</h4>
					<select name="brand" class="form-control" id="sel1">
					</select>
				</div>
				<div id="block_container">
					<div id='block1'>
						<h4>Data de fim</h4>
						<input id="end-date" class='popup-element' type="text" title="Insert a future date"/>
					</div>
					<div id='block2'>
						<h4>Carrega fotografias</h4>
						<input multiple id="images" name="images[]" type="file" accept="image/*" required>
					</div>
				</div>
				<input id='create-auction' type="submit" name="create-auction" class="create-auction custom-modal-submit" value="Criar">
			</form>
		</div>
	</div>
</div>

<script language="JavaScript" type="text/javascript"> 
    var username = '{$username}'; 
</script> 

<link href="../lib/uploadFileLib/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="../lib/uploadFileLib/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="../lib/uploadFileLib/js/fileinput.js"></script>
<script src="../lib/uploadFileLib/js/fileinput_locale_pt.js"></script>
<script src="../js/importBd.js" type="text/javascript"></script>