<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 10:34:42
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/recents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335531673574f2c5cbe65a0-18292074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ef93addd8a762320366cecdce8ae6879aab9ceb' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/recents.tpl',
      1 => 1465288478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335531673574f2c5cbe65a0-18292074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f2c5cc1c5c1_83618175',
  'variables' => 
  array (
    'recentAuctions' => 0,
    'recentAuction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f2c5cc1c5c1_83618175')) {function content_574f2c5cc1c5c1_83618175($_smarty_tpl) {?><div class="panel-body">
	<h1 class="page-header">Mais recentes
	</h1>
	<div class="main-carousel">
		<?php  $_smarty_tpl->tpl_vars['recentAuction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recentAuction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recentAuctions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recentAuction']->key => $_smarty_tpl->tpl_vars['recentAuction']->value) {
$_smarty_tpl->tpl_vars['recentAuction']->_loop = true;
?>
		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['idleilao'];?>
">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("<?php if ($_smarty_tpl->tpl_vars['recentAuction']->value['imagelink']==null) {?>https://placehold.it/800x600<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['imagelink'];?>
<?php }?>") 50% 50% no-repeat; background-size: cover; display:block;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['idleilao'];?>
" class="main-color auction-name"><?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['nome'];?>
</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
					<?php if ($_smarty_tpl->tpl_vars['recentAuction']->value['licitacaoatual']>0) {?>
						<?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['licitacaoatual'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['recentAuction']->value['licitacaobase'];?>

					<?php }?>
				</p>
			</small>
		</div>
		<?php } ?>
	</div>
</div>


<?php }} ?>
