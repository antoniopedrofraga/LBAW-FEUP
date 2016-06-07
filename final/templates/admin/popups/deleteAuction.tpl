    <div class="modal fade" id="deleteAuction-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/deleteAuction.php" method="post" enctype="multipart/form-data" >
                <input id='auctionid' type = "hidden" name="auctionid">
                <input id='auctionerid' type = "hidden" name="auctionerid">
                
                <div>
                    <h1>Escolheu eliminar o leilao: <input id='nameleilao' type="text" class="form-control" name="nameleilao" readonly></h1><br>
                </div> 
                
                <input type="submit" name="delete" class="login custom-modal-submit" value="Eliminar">
            </form>
            </div>
        </div>
    </div>