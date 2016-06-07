<?php /* Smarty version Smarty-3.1.15, created on 2016-06-07 04:16:33
         compiled from "/opt/lbaw/lbaw1512/public_html/proto/templates/home/feedbackpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13028834355753d3cd957825-54598843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefc028c08a1042db32f0fbb4881d39e1e893d1e' => 
    array (
      0 => '/opt/lbaw/lbaw1512/public_html/proto/templates/home/feedbackpage.tpl',
      1 => 1465265779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13028834355753d3cd957825-54598843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5753d3cda03f72_72628469',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5753d3cda03f72_72628469')) {function content_5753d3cda03f72_72628469($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="../css/custom-modal.css" />
<link rel="stylesheet" type="text/css" href="../css/create-auction.css" />
<link href="../css/hover.min.css" rel="stylesheet">
<link href="../css/feedback.css" rel="stylesheet">

<div class="container">
	<div class="row row-centered">
		<?php echo $_smarty_tpl->getSubTemplate ('users/tabs/display-feedback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('popups/createAuction.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="../daterangepicker/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="../daterangepicker/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../daterangepicker/daterangepicker.css" />

</body>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html><?php }} ?>
