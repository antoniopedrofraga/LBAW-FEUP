<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/unAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10330551555756b1364c2af4-25706625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dfc926ec486eb9ffd9a0115c6274dbd6574df8a' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/popups/unAdmin.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10330551555756b1364c2af4-25706625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364c4200_30555382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364c4200_30555382')) {function content_5756b1364c4200_30555382($_smarty_tpl) {?>    <div class="modal fade" id="unadmin-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
