<?php /* Smarty version Smarty-3.1.15, created on 2016-04-15 18:12:49
         compiled from "/opt/lbaw/lbaw1512/public_html/frmk/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101289413357111301ef7293-66482555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16929d6488e69d4167b69052f106e46fbed512b' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/frmk/templates/common/menu_logged_out.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101289413357111301ef7293-66482555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57111301f04e76_40757493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57111301f04e76_40757493')) {function content_57111301f04e76_40757493($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
