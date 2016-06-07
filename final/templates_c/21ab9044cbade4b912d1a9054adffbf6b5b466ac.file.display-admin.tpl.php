<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:34:10
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/admin/display-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8201404155756b13235e425-76122656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ab9044cbade4b912d1a9054adffbf6b5b466ac' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/admin/display-admin.tpl',
      1 => 1465297705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8201404155756b13235e425-76122656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'tabIndex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756b1323a5505_14714513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756b1323a5505_14714513')) {function content_5756b1323a5505_14714513($_smarty_tpl) {?><link href="../css/profile.css" rel="stylesheet">

<div class="row">

			<div class="col-md-3 tabs">
				<p class="lead"><span class="glyphicon glyphicon-cog"></span>    Administrador</p>
				<div class="list-group">
					<a href="../pages/admin.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=1" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==1) {?>active<?php }?>">Leilões</a>
					<a href="../pages/admin.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=2" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==2) {?>active<?php }?>">Utilizadores</a>
					<a href="../pages/admin.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=3" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==3) {?>active<?php }?>">Mensagens</a>
			
				</div>
			</div>
			
			<div class="col-md-9">
				<?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==1) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('admin/tabs/display-auctions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<script src="../js/admin/allAuctions.js"></script>
				<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==2) {?>
					<?php echo $_smarty_tpl->getSubTemplate ('admin/tabs/display-users.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<script src="../js/admin/users.js"></script>
				<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==3) {?>	
					<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<script src="../js/messages/get-rcv-msgs.js"></script>
				<?php }?>
			</div>
</div><?php }} ?>
