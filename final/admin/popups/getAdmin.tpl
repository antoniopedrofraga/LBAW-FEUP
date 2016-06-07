    <div class="modal fade" id="getadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/getAdmin.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-getadmin' type = "hidden" name="id-user-getadmin">
                
                <div>
                    <h1>Escolheu tornar administrador o utilizador: <input id='username-getadmin' type="text" class="form-control" name="username-getadmin" readonly></h1><br>
                </div> 
                
                <input type="submit" name="getAdmin" class="login custom-modal-submit" value="Tornar administrador">
            </form>
            </div>
        </div>
    </div>