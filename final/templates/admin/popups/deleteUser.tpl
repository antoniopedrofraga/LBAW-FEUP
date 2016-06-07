    <div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/delete.php" method="post" enctype="multipart/form-data" >
                <input id='id-user' type = "hidden" name="id-user">
                
                <div>
                    <h1>Escolheu eliminar o utilizador: <input id='username' type="text" class="form-control" name="username" readonly></h1><br>
                </div> 
                
                <input type="submit" name="delete" class="login custom-modal-submit" value="Eliminar">
            </form>
            </div>
        </div>
    </div>