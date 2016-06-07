<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/unAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145807882457561a34c50152-82683495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8080923fe4f38b46541e2e2dec72a91f95d8877d' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/unAdmin.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145807882457561a34c50152-82683495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57561a34c50ec0_20050457',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57561a34c50ec0_20050457')) {function content_57561a34c50ec0_20050457($_smarty_tpl) {?>    <div class="modal fade" id="unadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/unAdmin.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-unadmin' type = "hidden" name="id-user-unadmin">
                
                <div>
                    <h1>Escolheu tirar o cargo de administrador ao seguinte utilizador: <input id='username-unadmin' type="text" class="form-control" name="username-unadmin" readonly></h1><br>
                </div> 
                
                <input type="submit" name="unAdmin" class="login custom-modal-submit" value="Deixar de ser administrador">
            </form>
            </div>
        </div>
    </div><?php }} ?>
