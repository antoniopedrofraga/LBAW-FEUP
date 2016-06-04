<link href="../css/chat.css" rel="stylesheet">

<div class="row">
    <div class="col-sm-9 col-md-10">
        <!-- Split button -->
        <div class="pull-right" id="buttons">
            <span class="text-muted" id="offset"><b>1</b>–<b>50</b> of <b>277</b></span>
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
                    <form name="enq" method="post" action="email/">
                        <fieldset>
                            <div class = "row">
                                <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
                            </div>
                            <div class = "row">
                                <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
                            </div>
                            <div class="actions">
                                <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                            </div>  
                        </fieldset>
                    </form>             
                </div>
            </div>

        </div>
    </div>
</div>