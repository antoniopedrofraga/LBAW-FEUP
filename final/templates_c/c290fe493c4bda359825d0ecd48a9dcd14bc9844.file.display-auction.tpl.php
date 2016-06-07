<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 12:08:28
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/display-auction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1559484891574f6d024a9291-31396137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c290fe493c4bda359825d0ecd48a9dcd14bc9844' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/display-auction.tpl',
      1 => 1465294089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559484891574f6d024a9291-31396137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f6d024b2985_54127568',
  'variables' => 
  array (
    'auction' => 0,
    'auctioner' => 0,
    'username' => 0,
    'auctionCount' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f6d024b2985_54127568')) {function content_574f6d024b2985_54127568($_smarty_tpl) {?>
<!-- Portfolio Item Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $_smarty_tpl->tpl_vars['auction']->value['nome'];?>

        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Portfolio Item Row -->
<div class="row">

    <div class="col-md-5">
        <?php echo $_smarty_tpl->getSubTemplate ('auctions/photos/display-photos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <div class="well col-md-3 bid-well">
        <h3>Descrição breve</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['auction']->value['descricaobreve'];?>
</p>
        <h3>Detalhes</h3>
        <small class='info'>
            <p><span class="glyphicon glyphicon-euro"></span> <?php if ($_smarty_tpl->tpl_vars['auction']->value['licitacaoatual']>0) {?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaoatual'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaobase'];?>
<?php }?></p>
            <p><span class="glyphicon glyphicon-time"></span> <span id="clock"></span></p>
        </small>

        <form class="span4 offset4 text-center">
            <input id="licitacao" type='text'placeholder="<?php if ($_smarty_tpl->tpl_vars['auction']->value['licitacaoatual']>0) {?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaoatual'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaobase'];?>
<?php }?>€" <?php if ($_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador']==$_smarty_tpl->tpl_vars['username']->value) {?>disabled<?php }?> onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 110 || event.charCode == 190">
            <button id='licitar' type="button" class="btn btn-warning btn-lg round bid-btn" disabled>Licitar!</button>
        </form>
    </div>
    <div class="well col-md-3 bid-well">
        <h3>Informação</h3>
        <br>
        <p>
            <span class="glyphicon glyphicon-user"></span>    <a href="../pages/feedbackpage.php?id=<?php echo $_smarty_tpl->tpl_vars['auctioner']->value['idutilizador'];?>
"><?php echo $_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador'];?>
</a>
        </p>
        <br>
        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['auctionCount']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['auctionCount']->value==1) {?>leilão<?php } else { ?>leilões<?php }?></h3>
        <br>
        <p class="text-center">
            <small>Registado desde<br>
                <?php echo $_smarty_tpl->tpl_vars['auctioner']->value['datainscricao'];?>
</small>
            </p>
            <div class="span4 offset4 text-center">
                <button type="button" class="btn btn-warning btn-larg round bid-btn" <?php if ($_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador']!=$_smarty_tpl->tpl_vars['username']->value) {?> data-toggle="modal" data-target="#messageModal"<?php }?> <?php if ($_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador']==$_smarty_tpl->tpl_vars['username']->value) {?>disabled<?php }?>><span class="glyphicon glyphicon-envelope"></span>  Contactar</button>
            </div>
            <br>
            <br>
            <div class="span4 offset4 text-center feedback">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <h3>Especificações completas</h3>
                <br>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['auction']->value['descricaocompleta'];?>

                </p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="messageModal" role="dialog">
    <div class="modal-dialog">
        <form id='messageform' name="enq" method="post" action="../actions/messages/send-message.php">
            <div class="modal-content">
                <fieldset>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Contactar</h4>
                    <br>
                </div>
                <div class="modal-body" style="word-wrap: break-word;">
                    <label class="icon-title" for="comment"><span class="glyphicon glyphicon-user"></span>    Destinatário</label>
                    <br>
                    <textarea name="username" class="form-control" rows="1" maxlength="30" placeholder="Username do destinatário" required><?php echo $_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador'];?>
</textarea>
                    <br>
                    <label class="icon-title" for="comment"><span class="glyphicon glyphicon-pencil"></span>    Mensagem</label>
                    <br>
                    <textarea id='msgtxt' name="message" class="form-control" rows="4" maxlength="5000" placeholder="Escreve a mensagem a enviar" required></textarea>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Clica para enviar a tua mensagem!" />
                </div>
            </fieldset>
        </div>
    </form>

    </div>
</div>

<script src="../lib/countdown-master/src/countdown.js"></script>
<script src="../lib/star-rating/js/star-rating.js" type="text/javascript"></script>
<script type="text/javascript">
    var sameuser = '<?php echo $_smarty_tpl->tpl_vars['auctioner']->value['nomeutilizador'];?>
' == '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
';
    var idcliente = '<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
';
    var bid = <?php if ($_smarty_tpl->tpl_vars['auction']->value['licitacaoatual']>0) {?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaoatual'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaobase'];?>
<?php }?>;
    var username = '<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
';
    var auctionid = <?php echo $_smarty_tpl->tpl_vars['auction']->value['idleilao'];?>
;
    var datafinal = '<?php echo $_smarty_tpl->tpl_vars['auction']->value['datafinal'];?>
';
</script>
<?php }} ?>
