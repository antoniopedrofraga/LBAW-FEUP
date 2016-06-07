<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 13:19:49
         compiled from "/opt/lbaw/lbaw1512/public_html/final/templates/home/auction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15655790035756add5de5ab8-83007795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3b4583bf9c80f20e35fac065d2a9dff5692449' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/final/templates/home/auction.tpl',
      1 => 1465297706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15655790035756add5de5ab8-83007795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5756add5e6bf19_00546782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5756add5e6bf19_00546782')) {function content_5756add5e6bf19_00546782($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
