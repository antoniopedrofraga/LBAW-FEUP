<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 19:46:57
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/home/auction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558356171574f6a1dc905c3-04243341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c355c1930c0e3ac46c67e835bd80b1e66b1cafe7' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/home/auction.tpl',
      1 => 1465234934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558356171574f6a1dc905c3-04243341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f6a1dd2d6a1_57238601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f6a1dd2d6a1_57238601')) {function content_574f6a1dd2d6a1_57238601($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="../css/auction.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/flickity/flickity.css" media="screen">

	<div class="container">
		<?php echo $_smarty_tpl->getSubTemplate ('auctions/display-auction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="../js/auctions/auction.js"></script>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('popups/createAuction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

<script src="../lib/flickity/flickity.js"></script>
<script src="../js/flickity.js"></script>

</body>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
