<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 10:39:31
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/display-portfolio-items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21148783765753c6934a7201-68317887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b921a08782dcae62802ae5ae9da6e8fffc378c' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/auctions/display-portfolio-items.tpl',
      1 => 1465288768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21148783765753c6934a7201-68317887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5753c6934dae05_94688122',
  'variables' => 
  array (
    'auction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5753c6934dae05_94688122')) {function content_5753c6934dae05_94688122($_smarty_tpl) {?>		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['auction']->value['idleilao'];?>
">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("<?php if ($_smarty_tpl->tpl_vars['auction']->value['imagelink']==null) {?>https://placehold.it/800x600<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['auction']->value['imagelink'];?>
<?php }?>") 50% 50% no-repeat; background-size: cover; display:block;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['auction']->value['idleilao'];?>
" class="main-color auction-name"><?php echo $_smarty_tpl->tpl_vars['auction']->value['nome'];?>
</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
					<?php if ($_smarty_tpl->tpl_vars['auction']->value['licitacaoatual']>0) {?>
					<?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaoatual'];?>

					<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['auction']->value['licitacaobase'];?>

					<?php }?>
				</p>
			</small>
		</div><?php }} ?>
