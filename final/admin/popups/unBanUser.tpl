    <div class="modal fade" id="unbanuser-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/unBanUser.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-unBanUser' type = "hidden" name="id-user-unBanUser">
                
                <div>
                    <h1>Escolheu devolver a posição de utilizador ao utilizador banido: <input id='username-unBanUser' type="text" class="form-control" name="username-unBanUser" readonly></h1><br>
                </div> 
                
                <input type="submit" name="unBanUser" class="login custom-modal-submit" value="Deixar de estar banido">
            </form>
            </div>
        </div>
    </div>