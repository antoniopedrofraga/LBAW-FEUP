<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:23:55
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19664411845756a5508681e3-07751447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '533ae7bf6e3bce1a9c916349f626d314fdb23433' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/users/tabs/display-chat.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19664411845756a5508681e3-07751447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a550900586_28622821',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a550900586_28622821')) {function content_5756a550900586_28622821($_smarty_tpl) {?><link href="../css/chat.css" rel="stylesheet">

<div class="row">
    <div class="col-sm-9 col-md-10">
        <!-- Split button -->
        <div class="pull-right" id="buttons" data-intro="Muda de página sem ter que a carregar de novo." data-position="left">
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
            <ul class="nav nav-tabs" data-intro="Alterna entre abas." data-position="bottom">
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


<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
