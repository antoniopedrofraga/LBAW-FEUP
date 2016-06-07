<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:14
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/tabs/display-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1805087355756b136462797-59399480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b36fb7f062d96199ef23ffa2f10d7f0d088f640' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/tabs/display-users.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1805087355756b136462797-59399480',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1364b5948_55017002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1364b5948_55017002')) {function content_5756b1364b5948_55017002($_smarty_tpl) {?>

<div class="form-group">
    <input id="searchTextBoxUsers" type="text" class="form-control" placeholder="Pesquisar utilizadores" autocomplete="off">
</div>

<div id="info-users" class="form-group">
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/popups/deleteUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/popups/banishUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/popups/unBanUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/popups/unAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/popups/getAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     
    <?php }} ?>
