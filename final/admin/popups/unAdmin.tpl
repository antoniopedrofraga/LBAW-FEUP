    <div class="modal fade" id="unadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/unAdmin.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-unadmin' type = "hidden" name="id-user-unadmin">
                
                <div>
                    <h1>Escolheu tirar o cargo de administrador ao seguinte utilizador: <input id='username-unadmin' type="text" class="form-control" name="username-unadmin" readonly></h1><br>
                </div> 
                
                <input type="submit" name="unAdmin" class="login custom-modal-submit" value="Deixar de ser administrador">
            </form>
            </div>
        </div>
    </div>