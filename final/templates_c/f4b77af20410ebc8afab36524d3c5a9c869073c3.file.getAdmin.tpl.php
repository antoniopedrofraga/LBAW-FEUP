<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/getAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81891080357561a34c541b9-15010121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4b77af20410ebc8afab36524d3c5a9c869073c3' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/popups/getAdmin.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81891080357561a34c541b9-15010121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57561a34c57003_63282361',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57561a34c57003_63282361')) {function content_57561a34c57003_63282361($_smarty_tpl) {?>    <div class="modal fade" id="getadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="custom-modal-container" id="custom-content">
            <form action="../actions/admin/getAdmin.php" method="post" enctype="multipart/form-data" >
                <input id='id-user-getadmin' type = "hidden" name="id-user-getadmin">
                
                <div>
                    <h1>Escolheu tornar administrador o utilizador: <input id='username-getadmin' type="text" class="form-control" name="username-getadmin" readonly></h1><br>
                </div> 
                
                <input type="submit" name="getAdmin" class="login custom-modal-submit" value="Tornar administrador">
            </form>
            </div>
        </div>
    </div><?php }} ?>
