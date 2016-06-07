<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:41
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5605739585756a1efc7a910-22745706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e2849660247908379eb72d9e1783aa525718302' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/home/home.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5605739585756a1efc7a910-22745706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756a1efcf5c77_62924530',
  'variables' => 
  array (
    'preferences' => 0,
    'preference' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756a1efcf5c77_62924530')) {function content_5756a1efcf5c77_62924530($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/flickity/flickity.css" media="screen">

<div class="container">
	<?php echo $_smarty_tpl->getSubTemplate ('auctions/recents.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('auctions/by-bid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php  $_smarty_tpl->tpl_vars['preference'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preference']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preferences']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preference']->key => $_smarty_tpl->tpl_vars['preference']->value) {
$_smarty_tpl->tpl_vars['preference']->_loop = true;
?>
	<div class="panel-body">
		<h1 class="page-header">Marca <?php echo $_smarty_tpl->tpl_vars['preference']->value['nome'];?>

		</h1>
		<?php if (empty($_smarty_tpl->tpl_vars['preference']->value['auctions'])) {?>
		<br>
		<br>
		<h3 class="text-muted" style="text-align: center;">Não há registo de leilões com esta marca</h3>
		<br>
		<br>
		<?php } elseif (count($_smarty_tpl->tpl_vars['preference']->value['auctions'])<4) {?>
		<?php  $_smarty_tpl->tpl_vars['auction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preference']->value['auctions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auction']->key => $_smarty_tpl->tpl_vars['auction']->value) {
$_smarty_tpl->tpl_vars['auction']->_loop = true;
?>
		<?php echo $_smarty_tpl->getSubTemplate ('auctions/display-portfolio-items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } ?>
		<?php } else { ?>
		<div class="main-carousel">
			<?php  $_smarty_tpl->tpl_vars['auction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['auction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['preference']->value['auctions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['auction']->key => $_smarty_tpl->tpl_vars['auction']->value) {
$_smarty_tpl->tpl_vars['auction']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ('auctions/display-portfolio-items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } ?>
		</div>
		<?php }?>
	</div>
	<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('popups/createAuction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

<script src="../lib/flickity/flickity.js"></script>
<script src="../js/flickity.js"></script>
<link href="../lib/chardin.js/chardinjs.css" rel="stylesheet">
<script src="../lib/chardin.js/chardinjs.min.js"></script>
</body>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
