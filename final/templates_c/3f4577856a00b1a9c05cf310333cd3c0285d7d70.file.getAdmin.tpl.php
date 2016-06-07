<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/getAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21121611515756b1364c5ba6-50691882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4577856a00b1a9c05cf310333cd3c0285d7d70' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/getAdmin.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21121611515756b1364c5ba6-50691882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364c76f7_50349058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364c76f7_50349058')) {function content_5756b1364c76f7_50349058($_smarty_tpl) {?>    <div class="modal fade" id="getadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
