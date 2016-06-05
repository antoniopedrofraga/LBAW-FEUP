<link href="../css/chat.css" rel="stylesheet">

<div class="row">
    <div class="col-sm-9 col-md-10">
        <!-- Split button -->
        <div class="pull-right" id="buttons">
            <span class="text-muted" id="offset"><b>0</b>–<b>0</b> of <b>0</b></span>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default" id="paginate-left">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-default" id="paginate-right">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-9 col-md-10">
            <ul class="nav nav-tabs">
                <li class="active"><a id='rcvdBtn' href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Recebidas</a>
            </li>
            <li><a id='sentBtn' href="#sent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                Enviadas</a>
            </li>
            <li><a id='createBtn' href="#create" data-toggle="tab"><span class="glyphicon glyphicon-plus">
            </span>Criar Mensagem</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="messages">
                <div class="list-group">
                </div>
            </div>
            <div class="tab-pane fade in" id="sent">
                <div class="list-group">
                    <div class="list-group-item">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in" id="create">
                <div class="list-group-item">
                    <form name="enq" method="post" action="../actions/messages/send-message.php">
                        <fieldset>
                            <div class="form-group">
                                <label class="icon-title" for="comment"><span class="glyphicon glyphicon-user"></span>    Destinatário</label>
                                <br>
                                <textarea name="username" class="form-control" rows="1" maxlength="30" placeholder="Username do destinatário" required></textarea>
                                <br>
                                <label class="icon-title" for="comment"><span class="glyphicon glyphicon-pencil"></span>    Mensagem</label>
                                <br>
                                <textarea name="message" class="form-control" rows="4" maxlength="5000" placeholder="Escreve a mensagem a enviar" required></textarea>
                            </div>
                            <div class="actions">
                                <input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Clica para enviar a tua mensagem!" />
                            </div>  
                        </fieldset>
                    </form>             
                </div>
            </div>

        </div>
    </div>
</div>


{include file='users/tabs/display-message.tpl'}