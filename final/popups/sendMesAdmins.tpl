<div class="modal fade" id="create-mensage-admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
            <h1>Mensagem para administrador</h1><br>
            <form action="../actions/messages/message-admins.php" method="post">
				<div data-intro="Descrição que aparecerá nas vistas simplificadas." data-position="left">
					<textarea name='mensagem' class='form-control popup-element' rows='5' id='mensagem' maxlength='300' placeholder="mensagem" required></textarea>
				</div>
                <input type="submit" name="sendMesAdmin" class="login custom-modal-submit" value="Enviar">
            </form>
        </div>
    </div>
</div>