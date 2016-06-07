<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:42
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/auctions/by-bid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10950718615756a1efd3bc57-56069008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b434feff893c3c82a980b85aef05edd33a06b510' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/auctions/by-bid.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10950718615756a1efd3bc57-56069008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1efd62385_54688914',
  'variables' => 
  array (
    'auctionsByBid' => 0,
    'auctionByBid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1efd62385_54688914')) {function content_5756a1efd62385_54688914($_smarty_tpl) {?><div class="panel-body">
	<h1 class="page-header">Mais licitadas
	</h1>
	<div class="main-carousel">
		<?php  $_smarty_tpl->tpl_vars['auctionByBid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auctionByBid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auctionsByBid']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auctionByBid']->key => $_smarty_tpl->tpl_vars['auctionByBid']->value) {
$_smarty_tpl->tpl_vars['auctionByBid']->_loop = true;
?>
		<div class="portfolio-item hvr-grow">
			<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['idleilao'];?>
">
				<img class="carousel-image" alt="" width=200 height=200 style='background: url("<?php if ($_smarty_tpl->tpl_vars['auctionByBid']->value['imagelink']==null) {?>https://placehold.it/800x600<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['imagelink'];?>
<?php }?>") 50% 50% no-repeat; background-size: cover; display:block;'>
			</a>
			<h3>
				<a href="../pages/auction.php?id=<?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['idleilao'];?>
" class="main-color auction-name"><?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['nome'];?>
</a>
			</h3>
			<small>
				<p><span class="glyphicon glyphicon-euro"></span>
					<?php if ($_smarty_tpl->tpl_vars['auctionByBid']->value['licitacaoatual']>0) {?>
						<?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['licitacaoatual'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['auctionByBid']->value['licitacaobase'];?>

					<?php }?>
				</p>
			</small>
		</div>
		<?php } ?>
	</div>
</div>

<?php }} ?>
