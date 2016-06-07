<link href="../css/chat.css" rel="stylesheet">

<div class="row">
    <div class="col-sm-9 col-md-10">
        <!-- Split button -->
        <div class="pull-right">
        <span class="text-muted" id="offset"><b>1</b>–<b>50</b> of <b>277</b></span>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default" id="paginate-left">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-default" id="paginate-right">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                       <span class="glyphicon glyphicon-refresh"></span>   </button>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-sm-9 col-md-10">
                <ul class="nav nav-tabs">
                    <li class="active"><a id='rcvd' href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                    </span>Recebidas</a>
                </li>
                <li><a id='sent' href="sent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                    Enviadas</a>
                </li>
                <li><a href="#create" data-toggle="tab"><span class="glyphicon glyphicon-plus">
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
                            <span class="text-center">This tab is empty.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="create">
                    <div class="list-group-item">
                        <span class="text-center">This tab is empty.</span>
                    </div>
                </div>

            </div>
        </div>
    </div>