<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 08:52:32
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/popups/sendMesAdmins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12196851557566407d47387-56752855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd84438027096b00b42dfaf3b9ef65dab1d8dc38d' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/popups/sendMesAdmins.tpl',
      1 => 1465282344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12196851557566407d47387-56752855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57566407d4ac32_66293238',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57566407d4ac32_66293238')) {function content_57566407d4ac32_66293238($_smarty_tpl) {?><div class="modal fade" id="create-mensage-admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
