<?php /* Smarty version Smarty-3.1.15, created on 2016-06-03 16:49:18
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/popups/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457051763574f4474278fa3-61615950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24644213c2c1b6ee401fdcf76af2b1e79f980e11' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/popups/login.tpl',
      1 => 1464964179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457051763574f4474278fa3-61615950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f447427bde7_65418733',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f447427bde7_65418733')) {function content_574f447427bde7_65418733($_smarty_tpl) {?><div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="custom-modal-container" id="custom-content">
        <h1>Autenticar</h1><br>
        <form action="../actions/users/login.php" method="post" >
            <input id='login-user' type="text" name="username" placeholder="Utilizador" required>
            <input id='login-password' type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" class="login custom-modal-submit" value="Entrar">
        </form>
    </div>
</div>
</div><?php }} ?>
