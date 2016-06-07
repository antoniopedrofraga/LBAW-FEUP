<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 14:47:22
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/auctions/display-portfolio-items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4371230195756c25ac98018-03412496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8bbee251cc49b375931fbba1fd9e5fae82882ce' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/auctions/display-portfolio-items.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4371230195756c25ac98018-03412496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756c25ad55d74_68727077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756c25ad55d74_68727077')) {function content_5756c25ad55d74_68727077($_smarty_tpl) {?>		<div class="portfolio-item hvr-grow">
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
