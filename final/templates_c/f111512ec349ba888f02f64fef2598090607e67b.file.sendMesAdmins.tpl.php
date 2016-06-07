<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:42
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/popups/sendMesAdmins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17596134855756a1efd701e7-37357903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f111512ec349ba888f02f64fef2598090607e67b' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/popups/sendMesAdmins.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17596134855756a1efd701e7-37357903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1efd71767_14008508',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1efd71767_14008508')) {function content_5756a1efd71767_14008508($_smarty_tpl) {?><div class="modal fade" id="create-mensage-admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
            <h1>Mensagem para administrador</h1><br>
            <form action="../actions/messages/message-admins.php" method="post">
				<div data-intro="Descrição que aparecerá nas vistas simplificadas." data-position="left">
					<textarea name='mensagem' class='form-control popup-element' rows='5' id='mensagem' maxlength='300' placeholder="mensagem" required></textarea>
				</div>
                <input type="submit" name="sendMesAdmin" class="login custom-modal-submit" value="Enviar">
            </form>
        </div>
    </div>
</div><?php }} ?>
