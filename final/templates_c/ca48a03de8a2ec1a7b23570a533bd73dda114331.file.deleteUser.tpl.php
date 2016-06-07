<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/deleteUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1638094815756b1364b9051-87885572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca48a03de8a2ec1a7b23570a533bd73dda114331' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/deleteUser.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1638094815756b1364b9051-87885572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364ba9a0_16842359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364ba9a0_16842359')) {function content_5756b1364ba9a0_16842359($_smarty_tpl) {?>    <div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
