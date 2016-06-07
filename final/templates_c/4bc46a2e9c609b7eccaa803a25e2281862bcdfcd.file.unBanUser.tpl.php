<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/unBanUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23334053557561a34c4c014-39000998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc46a2e9c609b7eccaa803a25e2281862bcdfcd' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/unBanUser.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23334053557561a34c4c014-39000998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57561a34c4cfd6_73024397',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57561a34c4cfd6_73024397')) {function content_57561a34c4cfd6_73024397($_smarty_tpl) {?>    <div class="modal fade" id="unbanuser-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
    </div><?php }} ?>
