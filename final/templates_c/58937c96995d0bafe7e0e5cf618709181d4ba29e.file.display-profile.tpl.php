<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:23:52
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/users/display-profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19960544645756a1fc13f984-60167307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58937c96995d0bafe7e0e5cf618709181d4ba29e' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/users/display-profile.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19960544645756a1fc13f984-60167307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1fc1a2b21_83151158',
  'variables' => 
  array (
    'USERNAME' => 0,
    'user' => 0,
    'tabIndex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1fc1a2b21_83151158')) {function content_5756a1fc1a2b21_83151158($_smarty_tpl) {?><link href="../css/profile.css" rel="stylesheet">

<div class="row">

	<div class="col-md-3 tabs">
		<p class="lead"><span class="glyphicon glyphicon-user"></span>    <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</p>
		<div class="list-group" data-intro="Acede a páginas pessoais clicando nestes elementos." data-position="left">
			<a href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=1" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==1) {?>active<?php }?>">Página de feedback</a>
			<a href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=2" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==2) {?>active<?php }?>">Os meus leilões</a>
			<a href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=3" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==3) {?>active<?php }?>">As minhas licitações</a>
			<a href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=4" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==4) {?>active<?php }?>">Mensagens</a>
			<a href="../pages/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idutilizador'];?>
&tab=5" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==5) {?>active<?php }?>">Configurações</a>
		</div>
	</div>

	<div class="col-md-9">
		<?php if ($_smarty_tpl->tpl_vars['tabIndex']->value==1) {?>
		<div class="row preview">
			<div class="col-md-12 col-centered">
				<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-feedback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-auctions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="../lib/countdown-master/src/countdown.js"></script>
		<script src="../js/auctions/myAuctions.js"></script>
		<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==3) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-auctions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="../lib/countdown-master/src/countdown.js"></script>
		<script src="../js/auctions/myBids.js"></script>
		<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==4) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="../js/messages/get-rcv-msgs.js"></script>
		<?php } elseif ($_smarty_tpl->tpl_vars['tabIndex']->value==5) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="../js/users/config.js"></script>
		<?php }?>
	</div>

</div><?php }} ?>
