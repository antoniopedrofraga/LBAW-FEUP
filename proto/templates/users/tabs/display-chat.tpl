<link href="../css/chat.css" rel="stylesheet">

<div class="row">
    <div class="col-sm-9 col-md-10">
        <!-- Split button -->
        <div class="pull-right">
            <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
            <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-default">
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
                    <li class="active"><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                    </span>Recebidas</a>
                </li>
                <li><a href="#sent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                    Enviadas</a>
                </li>
                <li><a href="#create" data-toggle="tab"><span class="glyphicon glyphicon-plus">
                </span>Criar Mensagem</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="messages">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                            display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                            <span class="text-muted">- Hi hello how r u ?</span> <span
                            class="badge">12:10 AM</span></a><a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                            display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                            <span class="text-muted">- Hi hello how r u ?</span> <span
                            class="badge">12:10 AM</span></a><a href="#" class="list-group-item read">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px;
                            display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                            <span class="text-muted">- Hi hello how r u ?</span> <span
                            class="badge">12:10 AM</span></a>
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