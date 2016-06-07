<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:08:45
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/popups/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13309576215756a1cba56a11-19967610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd78c76e6e501f10ccb9fc1bc4a6a44b47a8f39a' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/popups/login.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13309576215756a1cba56a11-19967610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1cba59471_49708656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1cba59471_49708656')) {function content_5756a1cba59471_49708656($_smarty_tpl) {?><div class="modal fade" id="login-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container">
        <h1>Autenticar</h1><br>
        <form action="../actions/users/login.php" method="post" >
            <input id='login-user' type="text" name="username" placeholder="Utilizador" required>
            <input id='login-password' type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" class="login custom-modal-submit" value="Entrar">
        </form>
    </div>
</div>
</div><?php }} ?>
