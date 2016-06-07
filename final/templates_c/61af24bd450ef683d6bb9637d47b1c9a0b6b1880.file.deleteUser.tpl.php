<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/deleteUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15280931885755a511a9ffc6-34885493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61af24bd450ef683d6bb9637d47b1c9a0b6b1880' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/deleteUser.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15280931885755a511a9ffc6-34885493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5755a511aa1cf9_56012744',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5755a511aa1cf9_56012744')) {function content_5755a511aa1cf9_56012744($_smarty_tpl) {?>    <div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/delete.php" method="post" enctype="multipart/form-data" >
                <input id='id-user' type = "hidden" name="id-user">
                
                <div>
                    <h1>Escolheu eliminar o utilizador: <input id='username' type="text" class="form-control" name="username" readonly></h1><br>
                </div> 
                
                <input type="submit" name="delete" class="login custom-modal-submit" value="Eliminar">
            </form>
            </div>
        </div>
    </div><?php }} ?>
