<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 05:02:58
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/admin/tabs/display-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5663094505754af44d2d8f0-27999483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd31761c32160a9fddd68d943c3918142e40e8f2f' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/admin/tabs/display-users.tpl',
      1 => 1465268533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5663094505754af44d2d8f0-27999483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5754af44df5926_68990700',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5754af44df5926_68990700')) {function content_5754af44df5926_68990700($_smarty_tpl) {?>

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
