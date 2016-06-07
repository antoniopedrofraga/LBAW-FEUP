
    <div class="modal fade" id="banish-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content2">
            <form action="../actions/admin/banish.php" method="post" enctype="multipart/form-data" >
                <input id="id-user-banish" type ="hidden" name="id-user-banish">
                
                <div>
                    <h1>Escolheu banir o utilizador: <input id="username-banish" type="text" class="form-control" name="username-banish" readonly></h1><br>
                </div>               
                
                <div>
					<textarea name='reasonbanned' class='form-control popup-element' rows='2' id='reasonbanned' maxlength='300' placeholder="Motivo" required></textarea>
				</div>
                <div id='block1'>
						<h4>Data de fim</h4>
						<input name="enddate" id="end-date-banish" class='popup-element' type="text" title="Insert a future date"/>
				</div>
                <input type="submit" name="banish" class="login custom-modal-submit" value="Banir">
            </form>
            </div>
        </div>
    </div>
